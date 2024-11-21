<?php

namespace App\Http\Requests\Api\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreVisitorRequest extends FormRequest
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
            'entity_id' => 'required|exists:entities,id',
            'visit_date' => 'required|date|date_format:Y-m-d',
        ];
    }


    public function messages(): array
    {
        return [
            'full_name.required' => __('user.contact_full_name_required'),
            'email.required' => __('user.contact_email_required'),
            'entity_id.required' => __('user.visitor_entity_id_required'),
            'entity_id.exists' => __('user.visitor_entity_id_not_found'),
            'visit_date.required' => __('user.visitor_visit_date_required'),
            'visit_date.date' => __('user.visitor_visit_date'),
            'visit_date.date_format' => __('user.visitor_visit_date_format'),

        ];
    }
}
