<?php

namespace App\Http\Controllers\Dashboard\Coupon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Coupon\CouponStoreRequest;
use App\Http\Requests\Dashboard\Coupon\CouponUpdateRequest;
use App\Http\Services\Dashboard\Coupon\CouponService;
use Illuminate\Http\RedirectResponse;

class CouponController extends Controller
{
    public function __construct(
       private readonly CouponService $couponService
    )
    {
    }

    public function index(){

        return $this->couponService->index();

    }

    public function create(){

        return $this->couponService->create();

    }

    public function store(CouponStoreRequest $request): RedirectResponse
    {

        return $this->couponService->store($request);

    }


    public function edit($id)
    {
        return $this->couponService->edit($id);

    }

    public function update($id, CouponUpdateRequest $request): RedirectResponse
    {
        return $this->couponService->update($id,$request);

    }

    public function destroy($id): RedirectResponse
    {

        return $this->couponService->destroy($id);

    }

}
