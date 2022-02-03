@extends('layout')

@section('nombre', 'Contactos')


@section('content')
<h1>@lang('Phonebook')</h1>
<style>
    b{
        font-size: 3vh
    }
</style>


<button><a href="{{ route('contactos.create') }}">@lang('New Contact')</a></button>


<!--COn un foreach nos imprime todos los contactos de la agenda-->
@forelse($contactos as $contacto)
<div class="row g-3 p-2">
    <div class="row mb-3 gx-3">
        <div class="col col-md-2">
            <h1>{{ $contacto->nombre }} {{ $contacto->apellidos }}</h1>  
        </div>
        <div class="col col-md-2">
            <p><b>@lang('Telephon'):</b> {{ $contacto->telefono }}</p>
        </div>
        <div class="col col-md-2">
            <p><b>@lang('Type'):</b>{{ $contacto->tipo }}</p> 
        </div>
        <div class="col col-md-1">
            <p><b>@lang('telephone'):</b> {{ $contacto->birthday }}</p>
        </div>
        <div class="col col-md-1">
            <p><b>@lang('Relationship'):</b> {{ $contacto->relationship }}</p>
        </div>
        <div class="col col-md-2">
            <p>{{ $contacto->description }}</p>   
        </div>
        <div class="col col-md-1">
            <small>{{ $contacto->favorites }}</small>
        </div>
        <div class="col col-md-1"> 
            <button><a href="{{ route('contactos.edit', $contacto) }}">@lang('Edit Contact')</a></button>
        </div>
    </div>
</div>
    
    <!--En caso de que esta vacia nos sale el siguente mensaje-->
    @empty
        <li>@lang('Phonebook Empty')</li>

        @endforelse
</ul>

@endsection