<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class RuangRequest extends FormRequest
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
            'kode_ruang' => 'required|min:2|max:8'.
                Rule::unique('ruang')->ignore($this->id),
            'ruang' => 'required|min:2|max:20'
        ];
    }

    public function messages(){
        return [
            'ruang.required' => 'Form ruang tidak boleh kosong',
            'ruang.min' => 'Form ruang minimal berisi 2 karakter',
            'ruang.max' => 'Form ruang maksimal berisi 50 karakter',
            'kode_ruang.required' => 'Form kode ruang tidak boleh kosong',
            'kode_ruang.min' => 'Form kode ruang minimal berisi 2 karakter',
            'kode_ruang.max' => 'Form kode ruang maksimal berisi 8 karakter'
        ];
    }
}
