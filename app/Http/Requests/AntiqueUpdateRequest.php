<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AntiqueUpdateRequest extends FormRequest
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
            'period_ar' => 'required|max:255',
            'period_en' => 'required|max:255',
            'period_ch' => 'nullable|max:255',
            'material_ar' => 'required|max:255',
            'material_en' => 'required|max:255',
            'material_ch' => 'nullable|max:255',
            'origin_ar' => 'required|max:255',
            'origin_en' => 'required|max:255',
            'origin_ch' => 'nullable|max:255',
            'images' => 'nullable|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required|numeric',
            'category_ar' => 'required',
            'category_en' => 'required',
            'category_ch' => 'nullable',
            'description_ar' => 'required',
            'description_en' => 'required',
            'description_ch' => 'nullable',

        ];
    }

    public function messages(): array
    {
        return [
            'name_ar.required' => trans('dashboard.antique_name_ar_required'),
            'name_ar.max' => trans('dashboard.antique_name_ar_max'),
            'name_en.required' => trans('dashboard.antique_name_en_required'),
            'name_en.max' => trans('dashboard.antique_name_en_max'),
            'name_ch.max' => trans('dashboard.antique_name_ch_max'),
            'period_ar.required' => trans('dashboard.antique_period_ar_required'),
            'period_ar.max' => trans('dashboard.antique_period_ar_max'),
            'period_en.required' => trans('dashboard.antique_period_en_required'),
            'period_en.max' => trans('dashboard.antique_period_en_max'),
            'period_ch.max' => trans('dashboard.antique_period_ch_max'),
            'material_ar.required' => trans('dashboard.antique_material_ar_required'),
            'material_ar.max' => trans('dashboard.antique_material_ar_max'),
            'material_en.required' => trans('dashboard.antique_material_en_required'),
            'material_en.max' => trans('dashboard.antique_material_en_max'),
            'material_ch.max' => trans('dashboard.antique_material_ch_max'),
            'origin_ar.required' => trans('dashboard.antique_origin_ar_required'),
            'origin_ar.max' => trans('dashboard.antique_origin_ar_max'),
            'origin_en.required' => trans('dashboard.antique_origin_en_required'),
            'origin_en.max' => trans('dashboard.antique_origin_en_max'),
            'origin_ch.max' => trans('dashboard.antique_origin_ch_max'),
            'images.*.mimes' => trans('dashboard.antique_images_mimes'),
            'category_ar.required' => trans('dashboard.antique_category_ar_required'),
            'category_en.required' => trans('dashboard.antique_category_en_required'),
            'description_ar.required' => trans('dashboard.antique_description_ar_required'),
            'description_en.required' => trans('dashboard.antique_description_en_required'),

        ];

        ### make translate for this key #####
    }
}
