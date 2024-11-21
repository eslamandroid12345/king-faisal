<?php

namespace App\Http\Requests\Dashboard\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
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
            'description_ar' => 'nullable|max:20000',
            'description_en' => 'nullable|max:20000',
            'description_ch' => 'nullable|max:20000',
            'speakers' => 'required',
            'location' => 'required',
            'from_time' => 'required',
            'to_time' => 'required',


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
            'description_ar.required' => trans('dashboard.media_center_department_description_ar_required'),
            'description_ar.max' => trans('dashboard.media_center_department_description_ar_max'),
            'description_en.required' => trans('dashboard.media_center_department_description_en_required'),
            'description_ch.max' => trans('dashboard.media_center_department_description_ch_max'),

        ];


    }
}
