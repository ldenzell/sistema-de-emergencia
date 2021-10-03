<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteFormRequest extends FormRequest
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
            'nombres'=>'required|max:20',
            'paterno'=>'required|max:20',
            'materno'=>'required|max:20',
            'ci'=>'required|max:50',
            'sexo'=>'required|max:10',
            'edad'=>'required',
            'presion_arterial'=>'required',
            'frecuencia_respiratoria'=>'required',
            'pulso'=>'required',
            'temperatura'=>'required',
            'alergias'=>'required|max:250',
            'password'=>'required|max:255'
        ];
    }
}
