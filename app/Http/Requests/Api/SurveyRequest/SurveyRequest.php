<?php

namespace App\Http\Requests\Api\SurveyRequest;

use Illuminate\Foundation\Http\FormRequest;

class SurveyRequest extends FormRequest
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
            'subject_title' => 'required',
            'department' => 'required',
            'subject_description' => 'required',
            'keywords' => 'required|array',
            'total_amount' => 'required|numeric',
        ];
    }
}
