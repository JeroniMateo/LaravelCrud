@extends('layout')

@section('nombre','Contactos | '$contactos->nombre )


@section('content')
  <!--Vista de un contacto especifico
-->

    <h1>{{$contactos->nombre}}</h1>
    <h2>{{$contactos->telefono}}</h2>
    <p>{{$contactos->tipo}}</p>
    <p>{{$contactos->birthday}}</p>
    <p>{{$contactos->relationship}}</p>
    <p>{{$contactos->description}}</p>
    <small>{{$contactos->favorites}}</small>
    <p>{{$contactos->created_at->diffForHumans()}}</p>

    <a href="{{ route('contactos.edit', $contactos) }}">Editar Contacto</a>
    

    <form action="{{ route('contactos.destroy', $contactos) }}" method="POST">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>

@endsection