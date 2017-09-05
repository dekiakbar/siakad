<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'nip' => 'required|min:3|max:8',
            'nama' => 'required|min:3|max:30',
            'notlp' => 'required|min:10|max:14|regex:/[0-9]/',
            'jeniskelamin' => 'required|min:9|max:9',
            'alamat' => 'required|min:5|max:100'
        ];
    }
}
