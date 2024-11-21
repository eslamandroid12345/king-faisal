<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferenceRequest extends FormRequest
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
            'reference_name' => 'required',
            'reference_type' => 'required',
            'pages_number' => 'required|integer',
        ];
    }


    public function messages(): array
    {
        return [

            'reference_name.required' => trans('dashboard.survey_request_reference_name_required'),
            'reference_type.required' => trans('dashboard.survey_request_reference_type_required'),
            'pages_number.required' => trans('dashboard.survey_request_pages_number_required'),
            'pages_number.integer' => trans('dashboard.survey_request_pages_number_integer'),

        ];
    }
}
