<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelasRequest extends FormRequest
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
            'kode_kelas' => 'required|min:3|max:8',
            'kode_jurusan' => 'required',
            'nama_kelas' => 'required|min:2|max:50',
            'tahun' => 'required|min:10|max:10|regex:/[0-9]/'
        ];
    }

    public function messages()
    {
        return [
            'kode_kelas.required' => 'Form kode kelas tidak boleh kosong',
            'kode_kelas.min' => 'Form kode kelas minimal berisi 3 karakter',
            'kode_kelas.max' => 'Form kode kelas maksimal berisi 8 karakter',
            'kode_jurusan.required' => 'Form kode jurusan tidak boleh kosong',
            'nama_kelas.required' => 'Form nama kelas tidak boleh kosong',
            'nama_kelas.min' => 'Form nama kelas minimal trdiri dari 2 karakter',
            'nama_kelas.max' => 'Form nama kelas maksimal terdiri dari 30 karakter',
            'tahun.required' => 'Form tahun tidak boleh kosong',
            'tahun.min' => 'Form tahun harus berisi 10 karakter',
            'tahun.max' => 'Form tahun harus berisi 10 karakter',
            'tahun.regex' => 'Form tahun hanya boleh berisi angka',
        ];
    }
}
