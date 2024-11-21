<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier() {
        return $this->getKey();
    }


    public function getJWTCustomClaims(): array
    {
        return [];
    }

    public function cart(): HasOne
    {
      return $this->hasOne(Cart::class,'user_id','id');
    }


    public function shoppingCartCount() : Attribute {
        return Attribute::get(
            get: function () {
                if ($this->cart() !== null) {
                    return $this->cart->items_count;
                }
                return 0;
            }
        );
    }


    //    public function image() : Attribute {
//        return Attribute::get(
//            get: function ($value) {
//                if ($value !== null) {
//                    return url($value);
//                }
//                return null;
//            }
//        );
//    }

    public function informationRequestStep(): Attribute {
        return Attribute::get(
            get: fn() => RequestInformation::query()
                ->where('user_id', auth('user-api')->id())
                ->latest()
                ->value('request_step') ?? 1
        );
    }


    public function surveyRequestStep(): Attribute {
        return Attribute::get(
            get: fn() => SurveyRequest::query()
                ->where('user_id', auth('user-api')->id())
                ->latest()
                ->value('request_step') ?? 1
        );
    }

    public function informationRequestCount() : Attribute {
        return Attribute::get(
            get: function () {

                return RequestInformation::query()
                    ->where('user_id',auth('user-api')->id())
                    ->count();

            }
        );
    }

    public function universityMessagesCount() : Attribute {
        return Attribute::get(
            get: function () {

                return UniversityMessage::query()
                    ->where('user_id',auth('user-api')->id())
                    ->count();
            }
        );
    }


    public function surveyRequestCount() : Attribute {
        return Attribute::get(
            get: function () {

                return SurveyRequest::query()
                    ->where('user_id',auth('user-api')->id())
                    ->count();

            }
        );
    }


    public function membershipStatus() : Attribute {
        return Attribute::get(
            get: function () {
                if ($this->is_member == 1) {
                    return 1;
                }
                return 0;
            }
        );
    }


    public function checkMembershipStatus() : Attribute {
        return Attribute::get(
            get: function () {
                if ($this->membership_number != null) {
                    return __('dashboard.member_active');
                }
                return __('dashboard.member_not_active');
            }
        );
    }



}
