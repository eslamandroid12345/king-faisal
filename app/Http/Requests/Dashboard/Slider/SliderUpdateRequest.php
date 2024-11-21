<?php

namespace App\Http\Requests\Dashboard\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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

            'url' => 'required',
            'background_image' => 'nullable|mimes:jpeg,png,jpg'


        ];
    }


    public function messages(): array
    {
        return [

            'url.required' => trans('dashboard.slider_url_required'),
            'background_image.mimes' => trans('dashboard.slider_background_image_mimes'),

        ];
    }
}
