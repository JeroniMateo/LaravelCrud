@extends('layout')

@section('nombre', 'Contactos')


@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <h1>@lang('Phonebook')</h1>
    <style>
        b{
            font-size: 3vh
        }
    </style>

<button><a href="{{ route('contactos.create') }}">@lang('New Contact')</a></button>


<!--COn un foreach nos imprime todos los contactos de la agenda-->
<table class="table table-dark table-striped mt-4">
    <thead>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Telephone</th>
        <th scope="col">Type</th>
        <th scope="col">Birthday</th>
        <th scope="col">Relationship</th>
        <th scope="col">Description</th>
        <th scope="col">Favorites</th>
        <th scope="col"></th>
    </thead>
    <tbody>
        @forelse($contactos as $contacto)
        <tr>
            <td>{{ $contacto->nombre }} </td>
            <td>{{ $contacto->apellidos }}</td>
            <td>{{ $contacto->telefono }}</td>
            <td>{{ $contacto->tipo }}</td>
            <td>{{ $contacto->birthday }}</td>
            <td>{{ $contacto->relationship }}</td>
            <td>{{ $contacto->description }}</td>
            <td>{{ $contacto->favorites }}</td>
            <td>
                
                    <a class="btn btn-info" href="{{ route('contactos.edit', $contacto) }}">Edit</a>
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        
        

    @empty
        <li>@lang('Phonebook Empty')</li>
        
        @endforelse
    

</tbody>
</table>

<!--En caso de que esta vacia nos sale el siguente mensaje-->

    @endsection
</body>
</html>