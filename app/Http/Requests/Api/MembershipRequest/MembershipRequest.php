<?php

namespace App\Http\Requests\Api\MembershipRequest;

use Illuminate\Foundation\Http\FormRequest;

class MembershipRequest extends FormRequest
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
            'academic_organization' => 'required',
            'academic_degree' => 'required',
            'email' => 'required|email',
            'years_of_subscription' => 'required|integer',
            'phone' => 'required',
            'total_amount' => 'required|numeric',
        ];
    }


    public function messages(): array
    {
        return [
            'full_name.required' => __('user.membership_full_name_required'),
            'academic_organization.required' => __('user.membership_academic_organization_required'),
            'academic_degree.required' => __('user.membership_academic_degree_required'),
            'email.required' => __('user.membership_email_required'),
            'email.email' => __('user.membership_email_email'),
            'years_of_subscription.required' => __('user.membership_years_of_subscription_required'),
            'years_of_subscription.integer' => __('user.membership_years_of_subscription_integer'),
            'phone.required' => __('user.membership_phone_required'),
            'total_amount.required' => __('user.membership_amount_required'),
            'total_amount.numeric' => __('user.membership_amount_numeric'),

        ];
    }
}
