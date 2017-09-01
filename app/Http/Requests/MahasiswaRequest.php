<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
            'nim' => 'required|min:3|max:8',
            'nama' => 'required|min:3|max:30',
            'alamat' => 'required|min:3|max:100',
            'jenis_kelamin' => 'required|max:9',
            'no_tlp' => 'required|regex:/[0-9]{12}/',
            'email' => 'required|email',
            'tempat' => 'required|min:3|max:20',
            'tanggal' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'id_jurusan' => 'required'
        ];
    }

    public function messages()
    {
        return [
        'nim.required' =>'Form Nim harus diisi',
        'nama.required' => 'Form Nama tidak boleh kosong',
        'alamat.required' =>'Form Alamat tidak boleh kosong',
        'jenis_kelamin.required' =>'Form Jenis kelamin harus diisi',
        'no_tlp.required' =>'No telepeon harus diisi untuk pemberitahuan',
        'email.required' =>'Email harus diisi untuk notification',
        'tempat.required' =>'Tempat lahir harus diisi',
        'tanggal.required' =>'Tanggal lahir harus diisi',
        'foto.required' =>'Foto profil harus diisi',
        'id_jurusan.required' =>'Jurusan harus diisi',
        ];
    }
}