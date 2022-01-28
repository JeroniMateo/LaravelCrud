<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class CreateContactosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('create-contactos');
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
            'nombre.required'=> 'Es necesario un nombre',
            'apellido.required'=>'Es necesario un apellido',
            'telefono.required'=>'Es necesirio un telefono',
            'relationship.required'=> 'Relacion necesaria'
        ];
    }
}
