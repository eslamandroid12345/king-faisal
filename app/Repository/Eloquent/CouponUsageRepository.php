<?php

namespace App\Repository\Eloquent;

use App\Models\CouponUsage;
use App\Repository\CouponUsageRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CouponUsageRepository extends Repository implements CouponUsageRepositoryInterface
{

    protected Model $model;

    public function __construct(CouponUsage $model)
    {
        parent::__construct($model);
    }



    public function checkUsageCoupon($couponId): int
    {
        return $this->model::query()
            ->where('coupon_id', $couponId)
            ->where('user_id',userId())
            ->count();
    }
}
