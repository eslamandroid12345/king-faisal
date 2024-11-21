<?php

namespace App\Http\Requests\Dashboard\Entity;

use Illuminate\Foundation\Http\FormRequest;

class EntityRequest extends FormRequest
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
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'name_ch' => 'nullable|max:255'
        ];
    }


    public function messages(): array
    {
        return [
            'name_ar.required' => trans('dashboard.entity_name_ar_required'),
            'name_ar.max' => trans('dashboard.entity_name_ar_max'),
            'name_en.required' => trans('dashboard.entity_name_en_required'),
            'name_en.max' => trans('dashboard.entity_name_en_max'),
            'name_ch.max' => trans('dashboard.entity_name_ch_max'),
        ];
    }
}
