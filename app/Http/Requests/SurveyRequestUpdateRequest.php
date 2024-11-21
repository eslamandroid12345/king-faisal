<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequestUpdateRequest extends FormRequest
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

            'total_amount' => 'required|integer',
        ];
    }


    public function messages(): array
    {
        return [

            'total_amount.required' => trans('dashboard.survey_request_total_amount_required'),
            'total_amount.integer' => trans('dashboard.survey_request_total_amount_integer'),


        ];
    }
}
