@extends('layout')

@section('nombre', 'Crear nuevo Contacto')


@section('content')
<h1>Crear nuevo Contacto</h1>



   @include('partials.validation-errors')

<form method="POST" action="{{route('contactos.store')}}">
    
<!--Nos lleva a la vista donde sale el formulario para crear un nuevo contacto con errores y validaciones-->
    @include('contactos')



</form>

@endsection