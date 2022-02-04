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
            <h1> @lang('Welcome') {{ auth()->user()->name }} @lang('to your Phonebook')</h1>
            <h2> @lang('Save here all your contacts')</h2>
            <p>Click on the Phonebook img </p><br>
            
            <button><a href="{{ route('contactos.index') }}"><img src="{{ asset('img/phonebook.png') }}" alt=""></a></button>

        </body>
        </html>    

    @endauth
@endsection