<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PointOfSalePhoneUpdateRequest extends FormRequest
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

            'phone' => 'required|numeric',
        ];
    }


    public function messages(): array
    {
        return [
            'phone.required' => trans('dashboard.point_of_sale_phone_required'),
            'phone.numeric' => trans('dashboard.point_of_sale_phone_numeric')
        ];
    }
}
