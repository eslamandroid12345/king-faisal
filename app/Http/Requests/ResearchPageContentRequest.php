<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearchPageContentRequest extends FormRequest
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

            'title_ar' => 'required|max:255',
            'title_en' => 'required|max:255',
            'title_ch' => 'nullable|max:255',
            'content_ar' => 'required',
            'content_en' => 'required',
            'content_ch' => 'nullable',

        ];
    }


    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.research_page_content_title_ar_required'),
            'title_en.required' => trans('dashboard.research_page_content_title_en_required'),
            'title_ar.max' => trans('dashboard.research_page_content_title_ar_max'),
            'title_en.max' => trans('dashboard.research_page_content_title_en_max'),
            'title_ch.max' => trans('dashboard.research_page_content_title_ch_max'),
            'content_ar.required' => trans('dashboard.research_page_content_content_ar_required'),
            'content_en.required' => trans('dashboard.research_page_content_content_en_required'),

        ];
    }
}
