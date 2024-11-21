<?php

namespace App\Http\Requests\Api\Message;

use Illuminate\Foundation\Http\FormRequest;

class UniversityMessageRequest extends FormRequest
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
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'university' => 'required',
            'college' => 'required',
            'department' => 'required',
            'subject' => 'required',
            'level' => 'required',
            'attachments' => 'required',

        ];
    }


    public function messages(): array
    {
        return [
            'full_name.required' => __('user.contact_full_name_required'),
            'email.required' => __('user.contact_email_required'),
            'email.email' => __('user.contact_email_email'),
            'phone.required' => __('user.message_phone_required'),
            'phone.numeric' => __('user.message_phone_numeric'),
            'university.required' => __('user.message_university_required'),
            'college.required' => __('user.message_college_required'),
            'department.required' => __('user.message_department_required'),
            'subject.required' => __('user.message_subject_required'),
            'level.required' => __('user.message_level_required'),
            'attachments.required' => __('user.message_attachments_required'),


        ];
    }
}
