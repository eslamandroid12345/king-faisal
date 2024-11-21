<?php

namespace App\Http\Requests\Api\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject' => 'required',
            'message' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'full_name.required' => __('user.contact_full_name_required'),
            'email.required' => __('user.contact_email_required'),
            'email.email' => __('user.contact_email_email'),
            'subject.required' => __('user.contact_subject_required'),
            'message.required' => __('user.contact_message_required'),
        ];
    }
}
