<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Número Primo</title>
</head>
<body>
    <form action="{{route('formularioPrimo.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <h2>Número Primo</h2>
        <label>
        Ingrese el número para saber si es o no primo:
        <br>
        <input type="number" name="numPrimo">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
