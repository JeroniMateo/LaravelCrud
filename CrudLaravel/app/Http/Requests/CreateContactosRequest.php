<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactosRequest extends FormRequest
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
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'required',
            'relationship'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=> 'El contacto necesita un nombre',
            'apellido.required'=>'Es necesario escribir tu apellido',
            'telefono.required'=>'El contacto necesita un telefono',
            'relationship.required'=> 'Debes especificar el tipo de relacion'
        ];
    }
}
