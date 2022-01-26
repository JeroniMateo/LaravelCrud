@extends('layout')

@section('nombre', 'Crear nuevo Contacto')


@section('content')
<h1>Crear nuevo Contacto</h1>



   @include('partials.validation-errors')

<form method="POST" action="{{route('contactos.store')}}">
    

    @include('contactos', ['btnText' => 'Guardar'])


   

</form>

@endsection