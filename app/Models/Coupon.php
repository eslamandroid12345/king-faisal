<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];

     public function couponUsages(): HasMany
     {
         return $this->hasMany(CouponUsage::class,'coupon_id','id');
     }


    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class,'coupon_id','id');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class,'coupon_id','id');
    }



}
