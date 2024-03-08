<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Cuadratica</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('primo.show')}}">Primo</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <form action="{{route('cuadratica.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <h2>Cuadrática</h2>
            <label>
                Ingrese el valor de a:
                <br>
                <input type="number" name="a">
                </label>
                <br>
                <label>
                Ingrese el valor de b:
                <br>
                <input type="number" name="b">
                </label>
                <br>
                <label>
                Ingrese el valor de c:
                <br>
                <input type="number" name="c">
                </label>
                <br><br>

        <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
