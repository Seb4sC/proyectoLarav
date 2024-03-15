<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Servicios | Insertar</title>
</head>
<body>
    @include('.examen.navbar')
    <h1>Servicios</h1>
    <form action="{{route('servicio.store')}}" method="POST" class="w-25">
        @csrf
        <div class="mb-3">
          <label for="actividad" class="form-label">Actividad</label>
          <input type="text" name="actividad" class="form-control" placeholder="Actividad">
        </div>
        <button type="submit" class="btn btn-primary">Registrar Servicio</button>
      </form>
</body>
</html>
