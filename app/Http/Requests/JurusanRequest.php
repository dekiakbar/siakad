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
            'kode_jurusan' =>'required|min:1|max:8',
            'nama_jurusan' => 'required|min:3|max:20|regex:[a-z A-Z]',
            'jenjang' => 'required|min:1|max:2'
        ];
    }

    public function messages()
    {
        return[
            'kode_jurusan.required' => 'Form kode jurusan harus diisi'
        ];
    }
}
