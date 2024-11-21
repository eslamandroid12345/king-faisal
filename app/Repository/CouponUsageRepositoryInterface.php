<?php

namespace App\Repository;


interface CouponUsageRepositoryInterface extends RepositoryInterface
{

    public function checkUsageCoupon($couponId);


}
