<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Actividades</h1>
    <a href="activities/create" class="btn btn-primary float-right">Nuevo actividad</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Duracción en minutos</th>
            <th>Número maximo de participantes</th>
        </tr>
        @forelse ($sessions as $session)
        <tr>
            <td>{{$session->name}} </td>
            <td>{{$session->descrip}} </td>
            <td>{{$session->duration}} </td>
            <td>{{$session->nummembers}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
    </table>
    <br>
    <a href="sessions/create" class="btn btn-primary float-right">Nuevas sessiones</a>
</body>

</html>
