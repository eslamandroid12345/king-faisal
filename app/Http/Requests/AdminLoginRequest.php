<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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

            'email' => 'required|email',
            'password' => 'required'
        ];
    }


    public function messages(): array
    {
        return [
            'email.required' => trans('dashboard.email_required'),
            'email.email' => trans('dashboard.email_mail'),
            'password.required' => trans('dashboard.password_required'),
        ];
    }
}
