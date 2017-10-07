<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FakultasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'kode_fak' => 'required|min:3|max:8',
            'nama_fak' => 'required|min:5|max:30',
        ];
    }

    public function messages()
    {
        return [
        'kode_fak.required' => 'Kode fakultas Harus diisi',
        'kode_fak.min' => 'Kode fakultas minimal berisi 3 karakter',
        'kode_fak.max' => 'Kode fakultas maksimal berisi 8 karakter',
        'nama_fak.required' => 'Kode fakultas harus diisi',
        'nama_fak.min' => 'Nama fakultas minimal terdiri dari 5 karakter',
        'nama_fak.max' => 'Nama fakultas maksimal terdiri dari 30 karakter',
        ];
    }
}
