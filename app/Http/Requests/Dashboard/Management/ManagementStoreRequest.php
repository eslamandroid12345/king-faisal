<?php

namespace App\Http\Requests\Dashboard\Management;

use Illuminate\Foundation\Http\FormRequest;

class ManagementStoreRequest extends FormRequest
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

            'name' => 'required|max:255',
            'role_ar' => 'required|max:255',
            'role_en' => 'required|max:255',
            'role_ch' => 'nullable|max:255',
            'description_ar' => 'required|max:20000',
            'description_en' => 'required|max:20000',
            'description_ch' => 'nullable|max:20000',
            'background_image' => 'required|image|mimes:jpeg,png,jpg',

        ];
    }

    public function messages(): array
    {
        return [

            'name.required' => trans('dashboard.name_required'),
            'name.max' => trans('dashboard.name_max'),
            'role_ar.required' => trans('dashboard.role_ar_required'),
            'role_ar.max' => trans('dashboard.role_ar_max'),
            'role_en.required' => trans('dashboard.role_en_required'),
            'role_en.max' => trans('dashboard.role_en_max'),
            'role_ch.max' => trans('dashboard.role_ch_max'),
            'description_ar.required' => trans('dashboard.description_ar_required'),
            'description_ar.max' => trans('dashboard.description_ar_max'),
            'description_en.required' => trans('dashboard.description_en_required'),
            'description_ch.max' => trans('dashboard.description_ch_max'),
            'background_image.required' => trans('dashboard.background_image_required'),
            'background_image.image' => trans('dashboard.background_image_image'),
            'background_image.mimes' => trans('dashboard.background_image_mimes'),

        ];


    }
}
