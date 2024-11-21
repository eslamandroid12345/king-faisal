<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|unique:users,email,' . auth('user-api')->id(),
            'phone' => 'required|unique:users,phone,'. auth('user-api')->id(),
            'password' => ['nullable', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
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

        ];
    }
}
