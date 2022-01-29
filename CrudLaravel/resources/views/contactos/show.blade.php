@extends('layout')

@section('nombre','Contactos | '$contacto->nombre )


@section('content')
  <!--Vista de un contacto especifico
-->

    <h1>{{$contacto->nombre}}</h1>
    <h2>{{$contacto->telefono}}</h2>
    <p>{{$contacto->tipo}}</p>
    <p>{{$contacto->birthday}}</p>
    <p>{{$contacto->relationship}}</p>
    <p>{{$contacto->description}}</p>
    <small>{{$contacto->favorites}}</small>
    <p>{{$contacto->created_at->diffForHumans()}}</p>
@can('update', $contacto)
<a href="{{ route('contactos.edit', $contacto) }}">Editar Contacto</a>
@endcan
    
@can('delete', $contacto)
  
<form id="delete" action="{{ route('contactos.destroy', $contacto) }}" method="POST">
  @csrf @method('DELETE')
  <button>Eliminar</button>
</form>
@endcan

@endsection