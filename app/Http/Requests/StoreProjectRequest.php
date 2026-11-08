<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'judul' => 'required|string|min:5|max:150',
            'deskripsi' => 'nullable|string',
            'tema_agent' => 'required|string',
            'api_key_secure' => 'required|string'
        ];
    }
}