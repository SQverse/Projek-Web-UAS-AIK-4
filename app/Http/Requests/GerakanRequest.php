<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GerakanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        $gerakan = $this->route('gerakan');
        $gerakanId = is_object($gerakan) ? $gerakan->id : null;

        return [
            'kategori_id' => ['required', 'exists:kategori,id'],
            'urutan' => ['required', 'integer', 'min:1'],
            'nama' => ['required', 'string', 'max:255'],
            'slug' => [
                'required', 'string', 'max:255', 'regex:/^[a-z0-9-]+$/',
                Rule::unique('gerakan', 'slug')
                    ->where('kategori_id', $this->input('kategori_id'))
                    ->ignore($gerakanId),
            ],
            'deskripsi' => ['nullable', 'string'],
            'gambar_url' => ['nullable', 'string', 'max:255'],
            'video_url' => ['nullable', 'string', 'max:255'],
        ];
    }
}
