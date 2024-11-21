<?php

namespace App\Http\Requests\Dashboard\Aspiration;

use Illuminate\Foundation\Http\FormRequest;

class AspirationUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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

            'icon' => 'nullable|mimes:jpeg,png,jpg',
            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ch' => 'nullable|max:255',
            'description_ar' => 'nullable|max:20000',
            'description_en' => 'nullable|max:20000',
            'description_ch' => 'nullable|max:20000',
        ];
    }


    public function messages(): array
    {
        return [

            'icon.mimes' => trans('dashboard.aspiration_icon__mimes'),
            'title_ar.required' => trans('dashboard.aspiration_title_ar_required'),
            'title_ar.max' => trans('dashboard.aspiration_title_ar_max'),
            'title_en.required' => trans('dashboard.aspiration_title_en_required'),
            'title_en.max' => trans('dashboard.aspiration_title_en_max'),
            'title_ch.max' => trans('dashboard.aspiration_title_ch_max'),
            'description_ar.max' => trans('dashboard.aspiration_description_ar_max'),
            'description_en.max' => trans('dashboard.aspiration_description_en_max'),
            'description_ch.max' => trans('dashboard.aspiration_description_ch_max'),

        ];
    }
}
