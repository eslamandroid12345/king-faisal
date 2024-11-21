<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearchPageRequest extends FormRequest
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
            'category' => 'required|in:research_page,research_program,museum_page',
            'page_content_id' => 'nullable|exists:page_contents,id',

        ];
    }


    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.research_page_title_ar_required'),
            'title_en.required' => trans('dashboard.research_page_title_en_required'),
            'title_ar.max' => trans('dashboard.research_page_title_ar_max'),
            'title_en.max' => trans('dashboard.research_page_title_en_max'),
            'title_ch.max' => trans('dashboard.research_page_title_ch_max'),
            'category.required' => trans('dashboard.research_page_type_required'),
            'category.in' => trans('dashboard.research_page_type_in'),
            'page_content_id.exists' => trans('dashboard.page_content_id_exists'),

        ];
    }
}
