<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function order(): BelongsTo
    {

        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function member_ship_request(): BelongsTo
    {

        return $this->belongsTo(MemberShipRequest::class,'member_ship_request_id','id');
    }

    public function request_information(): BelongsTo
    {

        return $this->belongsTo(RequestInformation::class,'request_information_id','id');
    }

    public function survey_request(): BelongsTo
    {

        return $this->belongsTo(SurveyRequest::class,'survey_request_id','id');
    }


    public function paymentStatus(): Attribute
    {

        return Attribute::get(function (){

            if($this->is_confirmed == 1){
                return __('dashboard.is_confirmed');

            }elseif ($this->is_declined == 1){
                return __('dashboard.is_not_confirmed');

            }else{
                return __('dashboard.is_declined');
            }


        });
    }


    public function paymentTypeCheck(): Attribute
    {

        return Attribute::get(function (){

            return $this->payment_type == 'CASH' ? __('dashboard.CASH') : __('dashboard.EPAYMENT');
        });
    }

}
