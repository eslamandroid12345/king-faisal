<?php

namespace App\Http\Requests\Dashboard\ResearchPaper;

use Illuminate\Foundation\Http\FormRequest;

class ResearchPaperStoreRequest extends FormRequest
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
            'description_ar' => 'required|max:20000',
            'description_en' => 'required|max:20000',
            'description_ch' => 'nullable|max:20000',
            'research_department_id' => 'required|exists:research_paper_departments,id',
            'background_image' => 'required|mimes:jpeg,png,jpg',
            'editor' => 'required'


        ];
    }


    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.research_paper_title_ar_required'),
            'title_ar.max' => trans('dashboard.research_paper_title_ar_max'),
            'title_en.required' => trans('dashboard.research_paper_title_en_required'),
            'title_en.max' => trans('dashboard.research_paper_title_en_max'),
            'title_ch.max' => trans('dashboard.research_paper_title_ch_max'),
            'description_ar.required' => trans('dashboard.research_paper_description_ar_required'),
            'description_ar.max' => trans('dashboard.research_paper_description_ar_max'),
            'description_en.required' => trans('dashboard.research_paper_description_en_required'),
            'description_en.max' => trans('dashboard.research_paper_description_en_max'),
            'description_ch.max' => trans('dashboard.research_paper_description_ch_max'),
            'research_department_id.required' => trans('dashboard.research_paper_research_id_required'),
            'research_department_id.exists' => trans('dashboard.research_paper_research_id_exists'),
            'editor.required' => trans('dashboard.research_paper_editor_required'),
            'background_image.required' => trans('dashboard.research_paper_background_image_required'),
            'background_image.mimes' => trans('dashboard.research_paper_background_image_mimes'),


        ];
    }
}
