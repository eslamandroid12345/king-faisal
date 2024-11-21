<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaisalHomeRequest extends FormRequest
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

            'content_ar' => 'required',
            'content_en' => 'required',

        ];
    }

    public function messages(): array
    {
        return [

            'content_ar.required' => trans('dashboard.content_ar_required'),
            'content_en.required' => trans('dashboard.content_en_required'),
        ];


    }
}
