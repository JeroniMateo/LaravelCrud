@extends('layout')

@section('nombre', 'contactos')


@section('content')
<h1>@lang('contactos')</h1>
<style>
    b{
        font-size: 3vh
    }
</style>


<a href="{{ route('contactos.create') }}">@lang('Crear Contacto')</a>


<!--COn un foreach nos imprime todos los contactos de la agenda-->
<ul> @forelse($contactos as $contacto)
    <a href="{{ route('contactos.edit', $contacto) }}">Editar Contacto</a>    
    <h1>{{ $contacto->nombre }} {{ $contacto->apellidos }}</h1>  
        <label for=""> <b>@lang('Telephon'):</b> {{ $contacto->telefono }}</label>
        <p>  <b>@lang('Type'):</b>{{ $contacto->tipo }}</p> 
        <p>  <b>@lang('telephone'):</b> {{ $contacto->birthday }}</p>
        <p> <b>@lang('Relationship'):</b> {{ $contacto->relationship }}</p>
        <p>{{ $contacto->description }}</p>   
        <p>{{ $contacto->favorites }}</p></li> 
            {{$contacto->updated_at->diffForHumans() }}
            <br>

<!--En caso de que esta vacia nos sale el siguente mensaje-->
    @empty
    <li>@lang('No hay contactos en la Agenda')</li>

    @endforelse
</ul>

@endsection