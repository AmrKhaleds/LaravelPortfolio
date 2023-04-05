<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'site_name' => 'string|max:70',
            'white_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'black_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'about' => 'string|max:500',
            'contact_email' => 'email',
            'contact_phone' => 'numeric|digits:11',
            'copyright' => 'string|max:70',
            'newsletter' => 'string|max:100',
        ];
    }
}
