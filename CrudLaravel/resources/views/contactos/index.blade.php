@extends('layout')

@section('nombre', 'contactos')


@section('content')

<h1>@lang('contactos')</h1>
@can('create', $newContacto)
    
<a href="{{ route('contactos.create') }}">Crear Contacto</a>
@endcan

<!--COn un foreach nos imprime todos los contactos de la agenda-->
<ul>
    @forelse($contacto as $contacto)
    <li><a href=" {{ route('contactos.show'), $contacto }} ">
            <h2>{{ $contacto->nombre }} </h2>
            <h3>{{$contacto->telefono}}</h3>
            <p>{{$contacto->tipo}}</p>
            <p>{{$contacto->birthday}}</p>
            <p>{{$contacto->relationship}}</p>
            <p>{{$contacto->description}}</p>
            <small>{{$contacto->favorites}}</small>
            {{$contacto->updated_at->diffForHumans() }}</a></li>

<!--En caso de que esta vacia nos sale el siguente mensaje-->
    @empty
    <li>No hay contactos en la Agenda
        
    </li>

    @endforelse
 
</ul>

@endsection