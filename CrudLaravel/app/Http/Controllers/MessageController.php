<?php

namespace App\Http\Controllers;



class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'nombre'=> 'required',
            'apellidos'=> 'required',
            'telefono' =>'required'
        ]);
        
        return 'Datos validados';
    }
}
