@extends('layout')

@section('nombre', 'Home')

@section('content')
    <h1>@lang('Home')</h1>
    @auth
    {{ auth()->user()->name }}
    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Welcome</title>
        </head>
        <body>
            <h1>Bienvenido a tu PhoneBook</h1>
            <h3>Guarda aqui todos tus contactos </h3>

            @include('contactos')
        </body>
        </html>    

    @endauth
@endsection