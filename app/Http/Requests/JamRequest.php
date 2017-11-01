<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JamRequest extends FormRequest
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
            'kode_jam' => 'required|min:3|max:8'
        ];
    }

    public function messages()
    {
        return [
            'kode_jam.required' => 'Form kode Jam harus diisi',
            'kode_jam.min' => 'Form kode jam minimal berisi 2 karakter',
            'kode_jam.max' => 'Form kode jam maksimal berisi 8 karakter'
        ];
    }
}
