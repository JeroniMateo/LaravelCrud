@extends('layout')

@section('nombre', 'Editar Contacto')


@section('content')
<h1 style="margin: 1%">Editar Contacto</h1>

    

    @include('partials.validation-errors')

     
   @include('form')
    

@endsection