@extends('layout')

@section('nombre','Contactos | '$contactos->nombre )


@section('content')
    <a href="{{ route('contactos.edit', $contactos) }}">Editar Contacto</a>
    
    

    <form action="{{ route('contactos.destroy', $contactos) }}" method="POST">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>

    <h1>{{$contactos->nombre}}</h1>
    <p>{{$contactos->telefono}}</p>
    <p>{{$contactos->tipo}}</p>
    <p>{{$contactos->created_at->diffForHumans()}}</p>

@endsection