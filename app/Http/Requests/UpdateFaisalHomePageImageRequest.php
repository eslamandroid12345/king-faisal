<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaisalHomePageImageRequest extends FormRequest
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

            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ch' => 'nullable|max:255',
            'description_ar' => 'required',
            'description_en' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg'
        ];
    }


    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.title_ar_required'),
            'title_en.required' => trans('dashboard.title_en_required'),
            'title_ar.max' => trans('dashboard.title_ar_max'),
            'title_en.max' => trans('dashboard.title_en_max'),
            'title_ch.max' => trans('dashboard.title_ch_max'),
            'description_ar.required' => trans('dashboard.description_ar_required'),
            'description_en.required' => trans('dashboard.description_en_required'),
            'image.mimes' => trans('dashboard.background_image_mimes'),

        ];
    }
}
