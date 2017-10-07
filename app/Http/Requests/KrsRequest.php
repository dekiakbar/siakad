<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class KrsRequest extends FormRequest
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
            'nim' => 'required|min:3|max:8'.
                Rule::unique('krs')->ignore($this->id),
            'nip' => 'required|min:3|max:8',
            'kode_mk' => 'required|min:3|max:8',
            'uts' => 'required|min:1|max:3|regex:/[0-9]/',
            'uas' => 'required|min:1|max:3|regex:/[0-9]/',
            'absen' => 'required|min:1|max:3|regex:/[0-9]/',
        ];
    }

    public function messages()
    {
        return [
            'nim.required' => 'Form NIM harus diisi',
            'nip.required' => 'Form NIP harus diisi',
            'kode_mk.required' => 'Form Mata kuliah harus diisi',
            'uts.required' => 'Form Nilai UTS harus diisi',
            'uts.max' => 'Form Nilai UTS maksima berisi 3 karakter',
            'uas.required' => 'Form Nilai UAS harus diisi',
            'uas.regex' => 'Form Nilai UTS hanya boleh berisi angka',
            'uas.max' => 'Form Nilai UAS maksimal berisi 3 karakter',
            'uas.regex' => 'Form Nilai UAS hanya boleh terdiri dari angka ',
            'absen.required' => 'Form Absen harus diisi',
            'absen.max' => 'Form Absen maksimal berisi 3 karakter',
            'absen.regex' => 'Form Nilai absen hanya boleh berisi angka',
        ];
    }
}
