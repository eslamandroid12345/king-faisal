<?php

namespace App\Http\Requests\Dashboard\ResearchPaper;

use Illuminate\Foundation\Http\FormRequest;

class ResearchPaperUpdateRequest extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required',
            'title_ch' => 'nullable',
            'description_ar' => 'required',
            'description_en' => 'required',
            'description_ch' => 'nullable',
            'research_department_id' => 'required|exists:research_paper_departments,id',
            'background_image' => 'nullable|mimes:jpeg,png,jpg',
            'editor' => 'required'


        ];
    }


    public function messages(): array
    {
        return [

            'title_ar.required' => trans('dashboard.research_paper_title_ar_required'),
            'title_en.required' => trans('dashboard.research_paper_title_en_required'),
            'description_ar.required' => trans('dashboard.research_paper_description_ar_required'),
            'description_en.required' => trans('dashboard.research_paper_description_en_required'),
            'research_department_id.required' => trans('dashboard.research_paper_research_id_required'),
            'research_department_id.exists' => trans('dashboard.research_paper_research_id_exists'),
            'editor.required' => trans('dashboard.research_paper_editor_required'),
            'background_image.mimes' => trans('dashboard.research_paper_background_image_mimes'),


        ];
    }
}
