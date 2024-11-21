<?php

namespace App\Http\Services\Dashboard\Coupon;

use App\Http\Requests\Dashboard\Coupon\CouponStoreRequest;
use App\Http\Requests\Dashboard\Coupon\CouponUpdateRequest;
use App\Repository\CouponRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class CouponService
{

    public function __construct(
        private readonly  CouponRepositoryInterface $couponRepository
    )
    {
    }

    public function index(){

        $coupons = $this->couponRepository->paginate();
        return view('dashboard.coupons.index',compact('coupons'));
    }


    public function create(){

        return view('dashboard.coupons.create');
    }

    public function store(CouponStoreRequest $request)
    {

        try {
            $this->couponRepository->create($request->validated());
            return redirect()->route('coupons.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }

    }


    public function edit($id)
    {
        $coupon = $this->couponRepository->getById($id);

        return view('dashboard.coupons.edit',compact('coupon'));
    }


    public function update($id, CouponUpdateRequest $request): RedirectResponse
    {

        try {
            $coupon = $this->couponRepository->getById($id);

            $this->couponRepository->update($coupon->id,$request->validated());
            return redirect()->route('coupons.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }

    }


    public function destroy($id): RedirectResponse
    {
        try {
            $coupon = $this->couponRepository->getById($id);

            if($coupon->carts()->exists() || $coupon->orders()->exists()){
                return redirect()->back()->with(['error' => __('dashboard.coupon_used')]);
            }
            $this->couponRepository->delete($id);
            return redirect()->route('coupons.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
