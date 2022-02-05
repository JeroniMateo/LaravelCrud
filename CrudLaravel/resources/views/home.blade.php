@extends('layout')

@section('nombre', 'Phonebook Home')

@section('content')
    <h1 style="color:rgb(197, 13, 13) "><b>Home</b></h1>
    <br>
    @auth
   
    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Home Page</title>
        </head>
        <!--Se da la Bienvenida al Phonebook incluyendo los contactos-->
        <body>
            <h2 style="color: "> <b>@lang('Welcome') {{ auth()->user()->name }} @lang('to your Phonebook')</b></h2>
            <br>
            <h3 > @lang('Save here all your contacts')</h3>
            <br>
            <h4 style="color: rgb(231, 155, 14)">Click on the Phonebook img </><br>
            <br>
            
            <button><a href="{{ route('contactos.index') }}"><img src="{{ asset('img/phonebook.png') }}" alt=""></a></button>

        </body>
        </html>    

    @endauth
@endsection