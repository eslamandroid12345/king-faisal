<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearchPageContentPdfRequest extends FormRequest
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

            'pdf_url' => 'required|mimes:pdf',


        ];
    }


    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.research_page_content_title_ar_required'),
            'title_en.required' => trans('dashboard.research_page_content_title_en_required'),


        ];
    }
}
