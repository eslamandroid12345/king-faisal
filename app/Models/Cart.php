<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function items(): HasMany
    {
        return $this->hasMany(CartContent::class,'cart_id','id');
    }

    public function coupon(): BelongsTo
    {
        return $this->belongsTo(Coupon::class,'coupon_id','id');
    }



    public function subtotalAmount() : Attribute {
        return Attribute::get(function () {
            return $this->items?->sum('amount');
        });
    }


    public function discountAmount(): Attribute
    {
        return Attribute::get(function () {
            $totalAmount = $this->items?->sum('amount');
            $discount = 0;

            if ($this->coupon()->exists()) {
                $discountValue = $this->coupon->discount_value;

                if ($this->coupon->discount_type == 'per') {
                    $discount = $totalAmount * $discountValue / 100;
                } else {
                    $discount = $totalAmount - $discountValue;
                }
            }

            return $discount;
        });
    }


    public function totalAmount() : Attribute {
        return Attribute::get(function () {
            return ($this->subtotalAmount -  $this->discountAmount);
        });
    }

    public function itemsCount() : Attribute {
        return Attribute::get(function () {
            return $this->items()?->count();
        });
    }

}
