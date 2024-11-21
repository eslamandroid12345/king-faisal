<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorStoreAndUpdateRequest extends FormRequest
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
            'full_name' => 'required|max:255',
            'about_author_ar' => 'nullable|max:20000',
            'about_author_en' => 'nullable|max:20000',
            'about_author_ch' => 'nullable|max:20000',
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.max' => trans('dashboard.author_name_max'),
            'about_author_ar.max' => trans('dashboard.about_author_ar_max'),
            'about_author_en.max' => trans('dashboard.about_author_en_max'),
            'about_author_ch.max' => trans('dashboard.about_author_ch_max'),


        ];
    }
}
