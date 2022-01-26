<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <form action="" id="phonebook">
        @csrf

        @include('validation-errors');
<!--Nombre del Contacto-->
        <label for="" class="form-label">
            Nombre:
            <input type="text" name="nombre" id="" value="{{old('nombre',$contactos->nombre)}}"  class="form-control">
        </label><br>
        {!! $errors->first('nombre','<small>:message</small><br>') !!}
        <br>
<!--Apellido del Contacto-->
        <label for="" class="form-label">
            Apellidos:
            <input type="text" name="apellidos" id="" value="{{old('apellidos', $contactos->telefono)}}" class="form-control" >
        </label><br>
        {!! $errors->first('apellidos','<small>:message</small><br>') !!}
        <br>

<!--Telefono del Contacto-->
        <label for="" class="form-label">
            Telefono:
            <input type="number" name="telefono" id="" value="{{old('telefono', $contactos->telefono)}}" class="form-control">
        </label><br>
        {!! $errors->first('telefono','<small>:message</small><br>') !!}
        <br>

<!--Tipo del Contacto seleccionar si el telefono es Fijo o Movil-->
        <label for="" class="form-label">
            Type:
           <select name="typo" id="tipo" form="phonebook" class="form-control" value="{{old('type', $contactos->descripcion)}}">
             <option value="Movil" class="form-control">Fijo</option>
             <option value="Fijo" class="form-control">Movil</option>
           </select>
        </label><br>
        {!! $errors->first('type','<small>:message</small><br>') !!}
        <br>

<!--Cumpleaños del Contacto-->
        <label for="" class="form-label">
          Birthday:
          <input type="date" name="birthday" id="birthday" value="{{old('birthday', $contactos->birthday)}}">
        </label><br>
        {!! $errors->first('birthday','<small>:message</small><br>') !!}
        <br>


<!--Vinculo del Contacto-->
        <label for="">
          Relationship: <br>
          <input type="radio" name="relationship" id="family" value="{{old('relationship', $contactos->descripcion)}}">
          <label for="family">Family</label><br>
          <input type="radio" name="relationship" id="friends" value="{{old('relationship', $contactos->descripcion)}}">
          <label for="friends">Friends</label><br>
          <input type="radio" name="relationship" id="others" value="{{old('relationship', $contactos->descripcion)}}">
          <label for="Others">Others</label><br> 
        </label> <br>
        {!! $errors->first('relationship','<small>:message</small><br>') !!}

        <!--Descripcion del Contacto-->
        <label for="" class="form-label">
          Description:
          <textarea name="descripcion" id="" cols="30" rows="10" value="{{old('descripcion', $contactos->descripcion)}}"  class="form-control"></textarea>
        </label>
        {!! $errors->first('description','<small>:message</small><br>') !!}
        
        <!--Añadir el Contacto a favoritos mediante un checkbox-->
        <input type="checkbox" name="favorites" id="favorites" value="fav" value="{{old('favorites', $contactos->descripcion)}}">
        <label for="favorites">Favorites</label>
      
        
        <button type="submit" class="btn btn-primary mb-3">Añadir</button>
    </form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>