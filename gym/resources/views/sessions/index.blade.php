<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Sessiones</h1>
    <a href="/sessions/create" class="btn btn-primary float-right">Nuevo</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nombre</th>
        </tr>
        @forelse ($sessions as $session)
        <tr>
            <td>{{$session->date_session}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/sessions/{{$session->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/sessions/{{$session->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
    </table>
</body>

</html>