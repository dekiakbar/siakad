<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HariRequest extends FormRequest
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
            'kode_hari' => 'required|min:2|max:8'
        ];
    }

    public function messages()
    {
        return [
            'kode_hari.required' => 'Form Kode Hari harus diisi',
            'kode_hari.min' => 'Form Kode Hari setidaknya berisi 2 karakter',
            'kode_hari.max' => 'Form Kode Hari maksimal terdiri dari 8 karakter'
        ];
    }
}
