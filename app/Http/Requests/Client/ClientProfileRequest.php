<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class ClientProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            // 'username' => 'required|string|max:50|unique:clients',
            // 'email' => 'required|email|unique:clients',
            'phone' => 'required|digits_between:10,11',
            'old-password' => 'required',
            'password' => 'required|confirmed',
            'project_type' => 'required',
        ];
    }
}
