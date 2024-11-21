<?php

namespace App\Http\Requests\Dashboard\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreRequest extends FormRequest
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

            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
            'image' => 'nullable|mimes:jpeg,png,jpg'

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('dashboard.name_store'),
            'email.required' => __('dashboard.email_store'),
            'email.email' => __('dashboard.email_mail_store'),
            'email.unique' => __('dashboard.email_unique_store'),
            'password.required' => __('dashboard.password_store'),
            'password.min' => __('dashboard.password_min_store'),
            'image.mimes' => __('dashboard.image_mimes_store')
        ];
    }
}
