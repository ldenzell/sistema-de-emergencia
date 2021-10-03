<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParamedicoFormRequest extends FormRequest
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
            'nombre'=>'required|max:20',
            'paterno'=>'required|max:20',
            'materno'=>'required|max:20',
            'sexo'=>'required|max:10',
            'email'=>'required|string|max:255',
            'password'=>'required|string|min:6',
            'rol'=> 'required|numeric|in:0,1'
        ];
    }
}
