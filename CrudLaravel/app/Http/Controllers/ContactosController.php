<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactosRequest;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//Nos lleva a la ultima vista del indice 
        return view('contactos.index',[
            'contactos'=>Contacto::latest()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//Cuando le damos a crear nuevo contacto nos lleva a la vista con el formulario para crear uno nuevo        
         return view('contactos.create',[
            'contactos'=> new Contacto
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//Antes de crear un contacto se va a validar el nombre,apellidos, telefono, y relacion
        Contacto::create($request->validated()); //['nombre','','tipo','created_at','updated_at']
       return redirect()->route('contactos.index')->with('status','Contacto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contactos)
    {

//Nos lleva a la vista donde poedemos ver el contacto con sus campos        
        return view('contactos.show',[
            'contactos'=> $contactos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contactos)
    {

//Nos lleva a al vista donde podemos editar el contacto 
        return view('contactos.edit',[
            'contactos'=> $contactos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contacto $contactos, CreateContactosRequest $request)
    {

//Valida el formulario y si la validación pasa lo actualiza y nos lleva a la vista del contacto con el contacto actualizado
        $contactos->update($request->validated());

        return redirect()->route('contactos.show', $contactos)->with('status','Contacto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contactos)
    {
        
//Si eliliminamos el contacto nos devuelve a la vista indice con el contacto eliminado        
        $contactos->delete();

        return redirect()->route('contactos.index')->with('status','Contacto eliminado');
    }
}
