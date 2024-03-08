<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado Primo</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($primos as $primo)
              <tr>
                  <td>{{$primo->id}}</td>
                  <td>{{$primo->numEval}}</td>
                  <td>{{$primo->result}}</td>

                  
              </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
