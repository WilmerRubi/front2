<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vuelo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .div-formulario{
        display:flex;
        justify-content: center;

    }
    .form-vuelo{
        width: 550px;
        border: black 2px solid;
        padding: 10px;
        border-radius: 9px;

    }
</style>
<body>
    <h1>Vista Para Crear Vuelos</h1>
    
    <div class="div-formulario">
    <form class="form-vuelo" action="{{route("vuelo.crear")}}" method="post">
        @csrf
        <div class="mb-3">
        <label for="" class="form-label">idVuelo: </label>
        <input type="text" class="form-control" name="id">
        </div>
        <div class="mb-3">
        <label for="" class="form-label">Origen: </label>
        <input type="text" class="form-control" name="origen">
        </div>
       <div class="mb-3">
       <label for="" class="form-label">Destino: </label>
       <input type="text" class="form-control" name="destino" >
       </div>
      <div class="mb-3">
      <label for="" class="form-label">Numero De Vuelo: </label>
      <input type="text" class="form-control" name="numero_vuelo">
      </div>
       <div class="mb-3">
       <label for="" class="form-label">Hora De Salida: </label>
       <input type="text" class="form-control" name="hora_salida">
       </div>
      <div class="mb-3">
      <label for="" class="form-label">Hora De Llegada: </label>
      <input type="text" class="form-control" name="hora_llegada">
      </div>
        <div class="mb-3">
        <label for="" class="form-label">Fecha De Salida: </label>
        <input type="text" class="form-control" name="fecha_salida">
        </div>
       <div class="mb-3">
       <label for="" class="form-label">Fecha De Regreso: </label>
       <input type="text" class="form-control" name="fecha_regreso">
       </div>
    <div style="display:flex; justify-content:center; width:100%">
    <button type="submit" class="btn btn-primary" >Crear Vuelo</button>
    </div>
  
    </form>
    </div>

    
</body>
</html>
