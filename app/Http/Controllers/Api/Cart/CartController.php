<?php

namespace App\Http\Controllers\Api\Cart;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Cart\CartRequest;
use App\Http\Requests\Api\Cart\CouponRequest;
use App\Http\Services\Api\Cart\CartService;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{


    protected CartService $cartService;

    public function __construct(CartService $cartService)
    {

        $this->cartService = $cartService;
    }


    public function addCoupon(CouponRequest $request): JsonResponse
    {

        return $this->cartService->addCoupon($request);
    }


    public function addToCart(CartRequest $request): JsonResponse
    {

        return $this->cartService->addToCart($request);

    }

    public function cartItems(): JsonResponse
    {

        return $this->cartService->cartItems();

    }


    public function removeItemFromCart($id): JsonResponse
    {

        return $this->cartService->removeItemFromCart($id);

    }




}
