<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class JadwalRequest extends FormRequest
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
            'kode_jadwal' => 'required|min:3|max:8|unique_with:jadwal,kelas,hari,jam'.
                Rule::unique('jadwal')->ignore($this->id)
        ];
    }

    public function messages()
    {
        return [
            'kode_jadwal.unique_with' => 'Jadwal Sudah ada',
            'kode_jadwal.required' => 'Form kode jadwal harus diisi',
            'kode_jadwal.min' => 'Form kode jadwal minimal berisi 3 karakter',
            'kode_jadwal.max' => 'Form kode jadwal maksimal berisi 8 karakter'
        ];
    }
}
