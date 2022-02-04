@extends('layout')

@section('nombre', 'Editar Contacto')


@section('content')
<h1>Editar Contacto</h1>

    

    @include('partials.validation-errors')

     
    <form method="POST" class="row g-3 p-2" action="{{ route('contactos.show') }}" id="phonebook">
     @method('PUT')
      @csrf
      <!--En este fichero blade es donde sale los errores de validacion
Salen tanto al incio como debajo de cada uno de los respectivos inputs-->
      @include('partials.validation-errors')
      
      <!--Nombre del Contacto-->
      <div class="row mb-3 gx-3">
        <div class="mb-3">
          <label for="" class="form-label"><b>@lang('Name'):</b></label>
          <input type="text" name="nombre" id="" value="{{old('nombre',$contactos->nombre)}}" class="form-control"
            required>
          {!! $errors->first('nombre','<small>:message</small><br>') !!}
        </div>

        <br>
        <!--Apellidos del Contacto-->
        <div class="mb-3">
          <label for="" class="form-label"><b>@lang('Lastname'):</b></label>
          <input type="text" name="apellidos" id="" value="{{old('apellidos', $contactos->apellidos)}}"
            class="form-control" required>
          {!! $errors->first('apellidos','<small>:message</small><br>') !!}
        </div>
        <br>

        <!--Telefono del Contacto-->
        <div class="mb-3">
          <label for="" class="form-label"><b>@lang('Telephone'):</b></label>
          <input type="number" name="telefono" id="" value="{{old('telefono', $contactos->telefono)}}"
            class="form-control" required>
          {!! $errors->first('telefono','<small>:message</small><br>') !!}
        </div>
        <br>

        <!--Tipo del Contacto seleccionar si el telefono es Fijo o Movil-->
        <div class="mb-3">
          <label for="" class="form-label"><b>@lang('Type'):</b></label>
          <select name="tipo" id="tipo" form="phonebook" class="form-control" value="{{old('tipo', $contactos->tipo)}}">
            <option value="Movil" class="form-control">Movil</option>
            <option value="Fijo" class="form-control">Fijo</option>
          </select>
          {!! $errors->first('tipo','<small>:message</small><br>') !!}
        </div>
        <br>

        <!--Cumpleaños del Contacto-->
        <div class="mb-3">
          <label for="" class="form-label"><b>@lang('Birthday'):</b></label>
          <input type="date" name="birthday" id="birthday" value="{{old('birthday', $contactos->birthday)}}">
          {!! $errors->first('birthday','<small>:message</small><br>') !!}
        </div>
        <br>

        <!--Vinculo del Contacto-->
        <div class="mb-3">
          <label for="">
            <b>@lang('Relationship'):</b>
            <input type="radio" name="relationship" id="family"
              value="{{old('relationship', $contactos->relationship)}}">
            <label for="family">Family</label><br>
            <input type="radio" name="relationship" id="friends"
              value="{{old('relationship', $contactos->relationship)}}">
            <label for="friends">Friends</label><br>
            <input type="radio" name="relationship" id="others"
              value="{{old('relationship', $contactos->relationship)}}">
            <label for="Others">Others</label><br>
          </label>
          {!! $errors->first('relationship','<small>:message</small><br>') !!}
        </div>
        <br>
        
        <!--Descripcion del Contacto-->
        <div class="mb-3">
          <label for="" class="form-label">
            <b>@lang('Description'):</b>
            <textarea name="description" id="" cols="20" rows="2"
              value="{{old('description', $contactos->description)}}" class="form-control"></textarea>
          </label>
          {!! $errors->first('description','<small>:message</small><br>') !!}
        </div>
        <br>
        
        <!--Añadir el Contacto a favoritos mediante un checkbox-->
        <div class="mb-3">
          <input type="checkbox" name="favorites" id="favorites" value="fav"
            value="{{old('favorites', $contactos->favorites)}}">
          <label for="favorites"><b>@lang('Favorites')</b></label>
        </div>
        <br>

        <div class="mb-3">
          <a href="{{route('contactos.index')}}"  class="btn btn-secondary mb-3">Cancelar</a>
          <button href="{{route('contactos.index')}}" type="submit" class="btn btn-primary mb-3">Enviar</button>
    </form>

    

@endsection