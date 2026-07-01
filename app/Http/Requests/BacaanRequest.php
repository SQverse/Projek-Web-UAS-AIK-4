<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BacaanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'urutan' => ['required', 'integer', 'min:1'],
            'judul' => ['nullable', 'string', 'max:255'],
            'teks_arab' => ['nullable', 'string'],
            'teks_latin' => ['nullable', 'string'],
            'terjemahan' => ['nullable', 'string'],
            'audio_url' => ['nullable', 'string', 'max:255'],
            'sumber' => ['nullable', 'string', 'max:255'],
        ];
    }
}
