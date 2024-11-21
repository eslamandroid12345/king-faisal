<?php

namespace App\Http\Requests\Dashboard\AnnualOffer;

use Illuminate\Foundation\Http\FormRequest;

class AnnualOfferUpdateRequest extends FormRequest
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

            'title_ar' => 'required|max:20000',
            'title_en' => 'required|max:20000',
            'title_ch' => 'nullable|max:20000',
            'published_year' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg',
            'pdf_url' => 'nullable|mimes:pdf',

        ];
    }

    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.media_center_department_title_ar_required'),
            'title_ar.max' => trans('dashboard.media_center_department_title_ar_max'),
            'title_en.required' => trans('dashboard.media_center_department_title_en_required'),
            'title_en.max' => trans('dashboard.media_center_department_title_en_max'),
            'title_ch.max' => trans('dashboard.media_center_department_title_ch_max'),
            'image_url.required' => trans('dashboard.media_center_department_image_url_required'),
            'image_url.mimes' => trans('dashboard.media_center_department_image_url_mimes'),
            'pdf_url.mimes' => trans('dashboard.media_center_department_pdf_url_mimes'),


        ];

        ### make translate for this key #####
    }
}
