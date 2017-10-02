<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakulRequest extends FormRequest
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
            'kode_mk' => 'required|min:3|max:8|unique:mata_kuliah',
            'makul' =>  'required|min:3|max:35',
            'sks' => 'required|min:1|max:2|regex:/[0-9]/'
        ];
    }

    public function messages()
    {
        return[
            'kode_mk.unique' => 'Maaf kode matakuliah sudah ada',
            'kode_mk.required' => 'Form kode mata kuliah tidak boleh kosong',
            'kode_mk.min' => 'Form kode mata kuliah harus berisi minimal 3 karakter',
            'kode_mk.max' => 'Form kode mata kuliah maksimal berisi 8 karakter',
            'makul.required' => 'Form nama mata kuliah tidak boleh kosong',
            'makul.min' => 'Form nama mata kuliah harus berisi minimal 3 karakter',
            'makul.max' => 'Form nama mata kuliah maksimal berisi 20 karakter',
            'sks.required' => 'Form jumlah SKS tidak boleh kosong',
            'sks.min' => 'Form jumlah SKS minimal berisi 1 karakter',
            'sks.max' => 'Form jumlah SKS maksimal berisi 2 karakter',
            'sks.regex' => 'Form jumlah SKS hanya boleh berisi angka'
        ];
    }
}
