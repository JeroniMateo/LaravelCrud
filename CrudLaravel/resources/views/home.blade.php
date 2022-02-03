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
        <img src="{{ asset('img/phonebook.png') }}" alt="">
<!--Se da la Bienvenida al Phonebook incluyendo los contactos-->
        <body>
            <h1>Welcome  {{ auth()->user()->name }} to your Phonebook</h1>
            <h3>Save here all your contacts</h3>
            

        </body>
        </html>    

    @endauth
@endsection