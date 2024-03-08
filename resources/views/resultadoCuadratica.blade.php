<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado Cuadrática</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>x1</th>
                <th>x2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cuadraticas as $cuadratica)
              <tr>
                  <td>{{$cuadratica->id}}</td>
                  <td>{{$cuadratica->a}}</td>
                  <td>{{$cuadratica->b}}</td>
                  <td>{{$cuadratica->c}}</td>
                  <td>{{$cuadratica->x1}}</td>
                  <td>{{$cuadratica->x2}}</td>
              </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
