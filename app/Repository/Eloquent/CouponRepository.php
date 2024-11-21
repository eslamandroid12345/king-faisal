<?php

namespace App\Repository\Eloquent;

use App\Models\Coupon;
use App\Repository\CouponRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CouponRepository extends Repository implements CouponRepositoryInterface
{

    protected Model $model;

    public function __construct(Coupon $model)
    {
        parent::__construct($model);
    }



}
