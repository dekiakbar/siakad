<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class DosenRequest extends FormRequest
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
            'nip' => 'required|min:3|max:8'.
                Rule::unique('dosen')->ignore($this->id),
            'nama' => 'required|min:3|max:30',
            'notlp' => 'required|min:10|max:14|regex:/[0-9]/',
            'jeniskelamin' => 'required|min:9|max:9',
            'alamat' => 'required|min:5|max:100'
        ];
    }

    public function messages()
    {
        return [
            'nip.unique' => 'Maaf kode dosen sudah ada',
            'nip.required' => 'Form NIP tidak boleh kosong',
            'nip.min' => 'Form NIP setidaknya harus berisi 3 karakter',
            'nip.max' => 'Form NIP maksimal harus berisi 8 karakter',
            'notlp.required' => 'Form No telpon tidak boleh kosong',
            'notlp.min' => 'No telpn setidaknya harus terdiri dari 10 angka',
            'notlp.max' => 'No telpon maksimal berisi 14 angka',
            'notlp.regex' => 'Form no telpon harus diisi dengan angka',
            'alamat.required' => 'Form alamat tidak boleh kosong',
            'alamat.min' => 'Form alamat setidaknya harus berisi 5 karakter',
            'alamat.max' => 'Form alamat maksimal berisi 100 karakter',
        ];
    }
}
