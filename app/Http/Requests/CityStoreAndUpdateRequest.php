<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityStoreAndUpdateRequest extends FormRequest
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
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'name_ch' => 'nullable|string|max:255'
        ];
    }


    public function messages(): array
    {
        return [
            'name_ar.required' => trans('dashboard.city_name_ar_required'),
            'name_ar.string' => trans('dashboard.city_name_ar_string'),
            'name_ar.max' => trans('dashboard.city_name_ar_max'),
            'name_en.required' => trans('dashboard.city_name_en_required'),
            'name_en.string' => trans('dashboard.city_name_en_string'),
            'name_en.max' => trans('dashboard.city_name_en_max'),
            'name_ch.string' => trans('dashboard.city_name_ch_string'),
            'name_ch.max' => trans('dashboard.city_name_ch_max'),
        ];
    }
}
