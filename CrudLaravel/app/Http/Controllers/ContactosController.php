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
            'newContacto' => new Contacto,
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

            $this->authorize('create', $contacto = new Contacto);

            //Cuando le damos a crear nuevo contacto nos lleva a la vista con el formulario para crear uno nuevo        
                     return view('contactos.create',[
                         
                        'contactos'=> $contacto
                    ]);
        }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContactosRequest $request)
    {
        $contacto = new Contacto($request->validated());

        $this->authorize('create',$contacto);
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
    public function show(Contacto $contacto)
    {

//Nos lleva a la vista donde poedemos ver el contacto con sus campos        
        return view('contactos.show',[
            'contactos'=> $contacto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {

        $this->authorize('update',$contacto);

//Nos lleva a al vista donde podemos editar el contacto 
        return view('contactos.edit',[
            'contactos'=> $contacto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contacto $contacto, CreateContactosRequest $request)
    {
        $this->authorize('update',$contacto);
//Valida el formulario y si la validación pasa lo actualiza y nos lleva a la vista del contacto con el contacto actualizado
        $contacto->update($request->validated());

        return redirect ()->route('contactos.show', $contacto)->with('status','Contacto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $this->authorize('delete',$contacto);
//Si eliliminamos el contacto nos devuelve a la vista indice con el contacto eliminado        
        $contacto->delete();

        return redirect()->route('contactos.index')->with('status','Contacto eliminado');
    }
}
