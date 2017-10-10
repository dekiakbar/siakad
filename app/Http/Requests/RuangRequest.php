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
            'ruang' => 'required|min:2|max:20'.
                Rule::unique('ruang')->ignore($this->id)
        ];
    }

    public function messages(){
        return [
            'ruang.required' => 'Form ruang tidak boleh kosong',
            'ruang.min' => 'Form ruang minimal berisi 2 karakter',
            'ruang.max' => 'Form ruang maksimal berisi 20 karakter'
        ];
    }
}
