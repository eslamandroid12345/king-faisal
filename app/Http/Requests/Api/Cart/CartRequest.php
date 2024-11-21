<?php

namespace App\Http\Requests\Api\Cart;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'book_store_id' => 'nullable',
            'antique_id' => 'nullable',
            'type' => 'required|in:book,antique'
        ];
    }


    public function messages(): array
    {
        return [
            'type.required' => __('user.type_required'),
            'type.in' => __('user.type_in')
        ];
    }
}
