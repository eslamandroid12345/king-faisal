<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaisalHomePageDocumentRequest extends FormRequest
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

            'description_ar' => 'required',
            'description_en' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg'
        ];
    }


    public function messages(): array
    {
        return [

            'description_ar.required' => trans('dashboard.description_ar_required'),
            'description_en.required' => trans('dashboard.description_en_required'),
            'image.required' => trans('dashboard.background_image_required'),
            'image.mimes' => trans('dashboard.background_image_mimes'),

        ];
    }
}
