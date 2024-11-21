<?php

namespace App\Http\Services\Api\Cart;
use App\Http\Requests\Api\Cart\CartRequest;
use App\Http\Requests\Api\Cart\CouponRequest;
use App\Http\Resources\Cart\CartResource;
use App\Http\Services\Mutual\GetService;
use App\Http\Traits\Response;
use App\Repository\AntiqueRepositoryInterface;
use App\Repository\BookStoreRepositoryInterface;
use App\Repository\CartContentRepositoryInterface;
use App\Repository\CartRepositoryInterface;
use App\Repository\CouponRepositoryInterface;
use App\Repository\CouponUsageRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

abstract class CartService
{
    use Response;

    public function __construct(
        private readonly GetService                     $getService,
        private readonly CartRepositoryInterface        $cartRepository,
        private readonly CouponRepositoryInterface      $couponRepository,
        private readonly BookStoreRepositoryInterface   $bookStoreRepository,
        private readonly AntiqueRepositoryInterface     $antiqueRepository,
        private readonly CartContentRepositoryInterface $cartContentRepository,
        private readonly CouponUsageRepositoryInterface $couponUsageRepository
    )
    {
    }

    public function addCoupon(CouponRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try {
            $user = auth('user-api')->user();
            $couponCode = $request->input('coupon_code');

            $coupon = $this->couponRepository->first('coupon_code', $couponCode);

            if (Carbon::now()->greaterThan($coupon->end_date) || $coupon->couponUsages->count() == $coupon->max_usage) {
                return $this->responseFail(message: __('user.coupon_code_expired'));
            }

            if ($user->cart == null) {
                return $this->responseFail(message: __('user.cart_empty'));
            }

            if ($this->couponUsageRepository->checkUsageCoupon($coupon->id)) {
                return $this->responseFail(201,message: __('user.coupon_used'));
            }

            $this->cartRepository->update($user->cart->id, ['coupon_id' => $coupon->id]);

            $this->couponUsageRepository->create([
                'coupon_id' => $coupon->id,
                'user_id' => $user->id
            ]);
            DB::commit();

            return $this->responseSuccess(message: __('user.coupon_added'));
        } catch (ModelNotFoundException $e) {
            DB::rollBack();
            return $this->responseFail(message: __('user.data_not_found'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return $this->responseFail(status: 500, message: __('user.data_not_found'));
        }
    }

    public function addToCart(CartRequest $request): JsonResponse
    {

        DB::beginTransaction();
        try {
            $user = auth('user-api')->user();
            $userId = userId();

            if($request->input('book_store_id') === null && $request->input('antique_id') === null){

                return $this->responseFail(status: 422, message: __('user.cart_not_add_product'));
            }

            if ($request->filled('book_store_id')) {
                $item = $this->bookStoreRepository->getById($request->book_store_id);
                $itemId = 'book_store_id';

            } else {
                $item = $this->antiqueRepository->getById($request->antique_id);
                $itemId = 'antique_id';
            }

            $cartId = $user->cart->id ?? $this->createCart($userId)->id;

            if($this->cartRepository->checkProductAddToCart($itemId,$item->id) > 0){
                return $this->responseFail(status: 201, message: __('user.product_added_before'));

            }else{
                $this->createCartContent($cartId, $itemId, $item->id);
            }

            DB::commit();
            return $this->responseSuccess(message: __('user.cart_added_successfully'));
        } catch (ModelNotFoundException $e) {
            DB::rollBack();
            return $this->responseFail(message: __('user.data_not_found'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return $this->responseFail(status: 500, message: __('user.data_not_found'));
        }
    }


    private function createCart($userId): ?Model
    {
        return $this->cartRepository->create(['user_id' => $userId]);
    }

    private function createCartContent($cartId, $itemId, $itemIdValue): void
    {
        $this->cartContentRepository->create([
            'cart_id' => $cartId,
            $itemId => $itemIdValue,
        ]);
    }

    public function cartItems(): JsonResponse
    {

        $user = auth('user-api')->user();

        if ($user->cart == null) {
            return $this->responseFail(status: 200,message: __('user.cart_is_empty'));
        }else{
            return $this->getService->handle(resource: CartResource::class,repository: $this->cartRepository,method: 'first',parameters: ['user_id',userId()],is_instance: true,message: __('user.show_success'));

        }

    }

    public function removeItemFromCart($id): JsonResponse
    {
        try {

            $product = $this->cartContentRepository->getById($id);

            $this->cartContentRepository->delete($product->id);

            return $this->responseSuccess(message: __('user.product_removed_from_cart'));
        }   catch (ModelNotFoundException $e) {
        return $this->responseFail(message: __('user.data_not_found'));
        } catch (\Exception $exception) {
            return $this->responseFail(status: 500, message: __('user.data_not_found'));
        }

    }

}
