<?php

namespace App\Http\Requests\Api\InformationRequest;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            'request_information_subject' => 'required',
            'request_information_attachments' => 'required',
            'total_amount' => 'required|numeric',

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
            'request_information_attachments.required' => __('user.message_attachments_required'),
        ];
    }
}
