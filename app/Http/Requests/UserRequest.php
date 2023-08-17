<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullName' => 'size_between:3,60',
            'email' => 'unique',
            'age' => 'in:>20,20-60,>61',
            'gender' => 'in:male,female',
            'subscribed' => 'boolean'
        ];
    }
}
