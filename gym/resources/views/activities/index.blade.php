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

    <h2>Busqueda</h2>
    <form action="" id="formulario">
    <input type="text" id="filtro">
    <input type="submit">
    </form>

    <div id="destinoFiltro">
    </div>
    <script src="/js/ajax.js"></script>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Duracción en minutos</th>
            <th>Número maximo de participantes</th>
        </tr>
        @forelse ($activities as $activity)
        <tr>
            <td>{{$activity->name}} </td>
            <td>{{$activity->descrip}} </td>
            <td>{{$activity->duration}} </td>
            <td>{{$activity->nummembers}} </td>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/js/ajax.js"></script>
</body>

</html>