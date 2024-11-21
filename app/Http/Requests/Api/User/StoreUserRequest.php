<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'privacy_and_policy' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [

            'full_name.required' => __('user.full_name_required'),
            'email.required' => __('user.email_required'),
            'email.unique' => __('user.email_unique'),
            'phone.required' => __('user.phone_required'),
            'phone.unique' => __('user.phone_unique'),
            'password.required' => __('user.password_required'),
            'password.min' => __('user.password_min'),
            'privacy_and_policy.required' => __('user.privacy_and_policy_required'),

        ];
    }
}
