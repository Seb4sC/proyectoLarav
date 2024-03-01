<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Servicio</title>
</head>
<body>
    <h1>Formulario Servicio</h1>
    <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Ingrese el nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
            Ingrese el precio: :
            <br>
            <input type="number" name="precio">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
