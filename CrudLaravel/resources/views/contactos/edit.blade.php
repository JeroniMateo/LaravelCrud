@extends('layout')

@section('nombre', 'Editar Contacto')


@section('content')
<h1>Editar Contacto</h1>

    

    @include('partials.validation-errors')


<form method="POST" action="{{ route('contactos.update', $contactos ) }}">
     
  <!--Nos lleva a la vista donde sale el formulario para edtar un contacto con errores y validaciones-->

    @include('contactos', ['btnText' => 'Actualizar'])

</form>

@endsection