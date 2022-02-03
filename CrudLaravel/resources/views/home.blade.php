@extends('layout')

@section('nombre', 'Phonebook Home')

@section('content')
    <h1>Home</h1>
    @auth
   
    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Welcome</title>
        </head>
<!--Se da la Bienvenida al Phonebook incluyendo los contactos-->
        <body>
            <h1>Bienvenido  {{ auth()->user()->name }} a tu PhoneBook</h1>
            <h3>Guarda aqui todos tus contactos</h3>
            
            <img src="{{ asset('img/phonebook.png') }}" alt="">

        </body>
        </html>    

    @endauth
@endsection