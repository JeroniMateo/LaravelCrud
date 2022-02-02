@extends('layout')

@section('nombre', 'contactos')


@section('content')
<h1>@lang('contactos')</h1>


@can('create', $newContacto)
<a href="{{ route('contactos.create') }}">Crear Contacto</a>
@endcan

<!--COn un foreach nos imprime todos los contactos de la agenda-->
<ul>
    @forelse($contactos as $contacto)
    <li><a href="{{ route('contactos.show', $contacto) }}"></a> {{ $contacto->nombre }} 
        <p>{{ $contacto->apellido }}</p>
        <p>{{ $contacto->telefono }}</p> 
        <p>{{ $contacto->tipo }}</p>
        <p>{{ $contacto->birthday }}</p>
        <p>{{ $contacto->relationship }}</p>
        <p>{{ $contacto->description }}</p>
        <p>{{ $contacto->favorites }}</p>
    </li>
            {{$contacto->updated_at->diffForHumans() }}</a></li>

<!--En caso de que esta vacia nos sale el siguente mensaje-->
    @empty
    <li>@lang('No hay contactos en la Agenda')</li>

    @endforelse
</ul>

@endsection