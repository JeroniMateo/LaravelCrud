<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactosRequest;
use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
//Nos lleva a la ultima vista del indice 
      /*   return view('contactos.index',[
            'contactos'=>Contacto::all(),
            'newContacto' => new Contacto
       ]); */
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

        Contacto::create([
            'name'=> $request->input('nombre'),
            'lastname'=> $request->input('apellidos'),
            'telephone'=> $request->input('telefono'),
            'type'=> $request->input('tipo'),
            'birthday'=> $request->input('birthday'),
            'relationship'=> $request->input('relationship'),
            'description'=> $request->input('description'),
            'favorites'=> $request->input('favorites'),
            'user_id' => Auth::user()->id
        ]);


        //Eloquent
        if($request->hasFile('image')){
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images',$image);

            $contacto = new Contacto();

           $contacto->name = $request->input('nombre');
           $contacto->lastname = $request->input('apellidos');
           $contacto->telephone = $request->input('telefono');
           $contacto->type = json_encode($request->input('tipo'));
           $contacto->birthday = $request->input('birthday');
           $contacto->relationship = $request->input('relationship');
           $contacto->description = $request->input('description');
           $contacto->favorites = $request->input('favorites');
           $contacto->user_id = Auth::user()->id;
           $contacto->save();
    }
        
        //Raw
       // $sql = "INSERT INTO contactos (nombre, apellidos, telefono, tipo, birthday, relationship, description, favorites) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

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
