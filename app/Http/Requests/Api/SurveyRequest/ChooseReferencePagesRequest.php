<?php

namespace App\Http\Requests\Api\SurveyRequest;

use Illuminate\Foundation\Http\FormRequest;

class ChooseReferencePagesRequest extends FormRequest
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
            'references' => 'required|array',
            'references.*.id' => 'required|integer',
            'references.*.from_page' => 'required|integer',
            'references.*.to_page' => 'required|integer',
        ];
    }
}
