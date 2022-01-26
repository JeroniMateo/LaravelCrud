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


        return view('contactos',[
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
         return view('contactos',[
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
        Contacto::create($request->validated()); //['nombre','telefono','tipo','created_at','updated_at']

       return redirect()->route('contactos')->with('status','Contacto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contactos)
    {
        return view('contactos',[
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
        return view('contactos',[
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
        $contactos->update($request->validated());

        return redirect()->route('contactos', $contactos)->with('status','Contacto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contactos)
    {
        $contactos->delete();

        return redirect()->route('contactos.index')->with('status','Contacto eliminado');
    }
}
