@extends('layout')

@section('nombre', 'contactos')


@section('content')

<h1>@lang('contactos')</h1>

<a href="{{ route('contactos.create') }}">Crear Contacto</a>


    

<ul>
    @forelse($contactos as $contacto)
    <li><a href=" {{ route('contactos.show'), $contacto }} ">
            <h2>{{ $contacto->nombre }} </h2>
            <3>{{$contacto->telefono}}</3>
            <p>{{$contacto->tipo}}</p>
            <p>{{$contactos->birthday}}</p>
            <p>{{$contactos->relationship}}</p>
            <p>{{$contactos->description}}</p>
            <small>{{$contactos->favorites}}</small>
            {{$contacto->updated_at->diffForHumans() }}</a></li>


    @empty
    <li>No hay contactos en la Agenda</li>

    @endforelse
    {{ $contactos->links() }}
</ul>

@endsection