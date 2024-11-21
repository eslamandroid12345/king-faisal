<?php

namespace App\Http\Requests\Dashboard\Coupon;

use Illuminate\Foundation\Http\FormRequest;

class CouponStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */


    public function rules(): array
    {
        return [
            'coupon_code' => 'required|max:255|unique:coupons,coupon_code',
            'discount_type' => 'required|in:per,val',
            'discount_value' => 'required|integer',
            'start_date' => 'required|date|date_format:Y-m-d',
            'end_date' => 'required|date|date_format:Y-m-d',
            'max_usage' => 'required|integer',

        ];
    }




    public function messages(): array
    {
        return [
            'coupon_code.required' =>  trans('dashboard.coupon_code_required'),
            'coupon_code.unique' =>  trans('dashboard.coupon_code_unique'),
            'coupon_code.max' =>  trans('dashboard.coupon_code_max'),
            'discount_type.required' =>  trans('dashboard.discount_type_required'),
            'discount_type.in' =>  trans('dashboard.discount_type_in'),
            'discount_value.required' =>  trans('dashboard.discount_value_required'),
            'discount_value.integer' =>  trans('dashboard.discount_value_integer'),
            'start_date.required' =>  trans('dashboard.start_date_required'),
            'start_date.date' =>  trans('dashboard.start_date_date'),
            'start_date.date_format' =>  trans('dashboard.start_date_date_format'),
            'end_date.required' =>  trans('dashboard.end_date_required'),
            'end_date.date' =>  trans('dashboard.end_date_date'),
            'end_date.date_format' =>  trans('dashboard.end_date_date_format'),
            'max_usage.required' =>  trans('dashboard.max_usage_required'),
            'max_usage.integer' =>  trans('dashboard.max_usage_integer'),

        ];
    }
}
