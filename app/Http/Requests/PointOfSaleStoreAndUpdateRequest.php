<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PointOfSaleStoreAndUpdateRequest extends FormRequest
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

            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'name_ch' => 'nullable|max:255',
            'description_ar' => 'nullable|max:20000',
            'description_en' => 'nullable|max:20000',
            'description_ch' => 'nullable|max:20000',
            'city_id' => 'required|exists:cities,id',

        ];
    }


    public function messages(): array
    {
        return [
            'name_ar.required' => trans('dashboard.point_of_sale_name_ar_required'),
            'name_ar.max' => trans('dashboard.point_of_sale_name_ar_max'),
            'name_en.required' => trans('dashboard.point_of_sale_name_en_required'),
            'name_en.max' => trans('dashboard.point_of_sale_name_en_max'),
            'name_ch.max' => trans('dashboard.point_of_sale_name_ch_max'),
            'description_ar.max' => trans('dashboard.point_of_sale_description_ar_max'),
            'description_en.max' => trans('dashboard.point_of_sale_description_en_max'),
            'description_ch.max' => trans('dashboard.point_of_sale_description_ch_max'),
            'city_id.required' => trans('dashboard.point_of_sale_city_id_required'),
            'city_id.exists' => trans('dashboard.point_of_sale_city_id_exists'),

        ];
    }
}
