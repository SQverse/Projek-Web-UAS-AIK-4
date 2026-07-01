<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelompokRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'nama_kelompok' => ['required', 'string', 'max:255'],
            'prodi' => ['required', 'string', 'max:255'],
            'mata_kuliah' => ['required', 'string', 'max:255'],
            'dosen' => ['required', 'string', 'max:255'],
            'universitas' => ['nullable', 'string', 'max:255'],
        ];
    }
}
