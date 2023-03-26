<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name'              => 'required|string|max:70',
            'slug'              => 'required|string|max:50',
            'short_description' => 'required|string|max:150',
            // 'image'             => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'brand_logo'             => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'image_path'        => 'string',
            'long_description'  => 'string|max:500',
            // 'brand_logo'        => 'image|mimes:jpeg,png,jpg,gif',
            'client'            => 'nullable|string|max:70',
            'industry'          => 'nullable|string|max:70',
            'services'          => 'nullable|string|max:70',
            'date'              => 'nullable|date',
            'website'           => 'nullable|string',
        ];
    }
}
