<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolesAroundTheWorldSectionsRequest extends FormRequest
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


        ];
    }

    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.title_ar_second_required'),
            'title_ar.max' => trans('dashboard.title_ar_second_max'),
            'title_en.required' => trans('dashboard.title_en_second_required'),
            'title_en.max' => trans('dashboard.title_en_second_max'),
            'title_ch.max' => trans('dashboard.title_ch_second_max'),

        ];

        /*
           'published_date.date' => trans('dashboard.date_date'),
            'published_date.date_format' => trans('dashboard.date_date_format'),
         */
    }
}
