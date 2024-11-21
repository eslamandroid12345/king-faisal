<?php

namespace App\Http\Requests\Dashboard\AboutUsInformation;

use Illuminate\Foundation\Http\FormRequest;

class AboutUsInformationUpdateRequest extends FormRequest
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

            'header_ar' => 'required|max:2000',
            'header_en' => 'required|max:2000',
            'header_ch' => 'nullable|max:2000',
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ch' => 'nullable|max:255',
            'description_ar' => 'required|max:20000',
            'description_en' => 'required|max:20000',
            'description_ch' => 'nullable|max:20000',
            'image' => 'nullable|mimes:jpeg,png,jpg'

        ];
    }

    public function messages(): array
    {
        return [

            'header_ar.required' => trans('dashboard.about_us_header_ar_required'),
            'header_ar.max' => trans('dashboard.about_us_header_ar_max'),
            'header_en.required' => trans('dashboard.about_us_header_en_required'),
            'header_en.required' => trans('dashboard.about_us_header_en_required'),
            'header_ch.max' => trans('dashboard.about_us_header_ch_max'),
            'title_ar.required' => trans('dashboard.about_us_title_ar_required'),
            'title_ar.max' => trans('dashboard.about_us_title_ar_max'),
            'title_en.required' => trans('dashboard.about_us_title_en_required'),
            'title_en.max' => trans('dashboard.about_us_title_en_max'),
            'title_ch.max' => trans('dashboard.about_us_title_ch_max'),
            'description_ar.required' => trans('dashboard.about_us_description_ar_required'),
            'description_ar.max' => trans('dashboard.about_us_description_ar_max'),
            'description_en.required' => trans('dashboard.about_us_description_en_max'),
            'description_en.max' => trans('dashboard.about_us_description_en_required'),
            'description_ch.max' => trans('dashboard.about_us_description_ch_max'),
            'image.mimes' => trans('dashboard.about_us_image_mimes')
        ];
    }
}
