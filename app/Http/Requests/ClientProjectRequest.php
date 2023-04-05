<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientProjectRequest extends FormRequest
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
            'project_name' => 'required|string|max:50',
            'client_id' => 'required|integer|exists:clients,id',
            'start_at' => 'required|date|after_or_equal:today',
            'end_at' => 'required|date|after:start_at',
            'progress' => 'required|string|min:0|max:12',
            'external_photos_link' => 'nullable|url',
            'external_videos_link' => 'nullable|url',
            'report' => 'nullable|file|miimes:pdf|max:2048',
            // 'photo_name' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,webp',
            // 'video_name' => 'nullable|file|mimetypes:video/mp4,video/quicktime|max:2048',
        ];
    }
}
