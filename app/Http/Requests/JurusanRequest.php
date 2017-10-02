<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JurusanRequest extends FormRequest
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
            'kode_jurusan' =>'required|min:1|max:8|unique:jurusan',
            'nama_jurusan' => 'required|min:3|max:30|regex:/[a-zA-Z]/',
            'jenjang' => 'required|min:1|max:2'
        ];
    }

    public function messages()
    {
        return[
            'kode_jurusan.unique' => 'Maaf kode jurusan sudah ada',
            'kode_jurusan.required' => 'Form kode jurusan harus diisi',
            'kode_jurusan.max' => 'Kode jurusan tidak boleh lebih dari 8 karakter',
            'nama_jurusan.required' => 'Form nama jurusan harus diisi',
            'nama_jurusan.min' => 'Nama jurusan setidaknya terdiri dari 3 karakter',
            'nama_jurusan.max' => 'Nama jurusan maksimal terdiri dari 25 karakter',
            'nama_jurusan.regex' => 'Nama jurusan hanya boleh di isi dengan huruf',
        ];
    }
}
