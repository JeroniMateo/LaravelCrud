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
    <form action="">
        @csrf
        <label for="" class="form-label">
            Nombre:
            <input type="text" name="nombre" id="" value="{{old('nombre',$contactos->nombre)}}"  class="form-control">
        </label>
        <label for="" class="form-label">
            Apellidos:
            <input type="text" name="apellidos" id="" value="{{old('apellidos', $contactos->telefono)}}" class="form-control" >
        </label>
        <label for="" class="form-label">
            Telefono:
            <input type="number" name="telefono" id="" value="{{old('telefono', $contactos->telefono)}}" class="form-control">
        </label>
        <label for="" class="form-label">
            Tipo:
            <input type="radio" name="Fijo" id="" value="Fijo"  class="form-control">
            <input type="radio" name="Movil" id="" value="Movil"  class="form-control">
        </label>
        <label for="" class="form-label">
            Descripcion:
            <textarea name="descripcion" id="" cols="30" rows="10" value="{{old('descripcion', $contactos->descripcion)}}"  class="form-control"></textarea>
        </label>
        <button type="submit" class="btn btn-primary mb-3">Añadir</button>
    </form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>