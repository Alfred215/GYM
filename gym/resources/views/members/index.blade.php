<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Miembros</h1>
    <a href="/members/create" class="btn btn-primary float-right">Nuevo</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Dni</th>
            <th>Nombre</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Fecha de nacimiento</th>
            <th>Sexo</th>
        </tr>
        @forelse ($members as $member)
        <tr>
            <td>{{$member->dni}} </td>
            <td>{{$member->name}} </td>
            <td>{{$member->weight}} </td>
            <td>{{$member->height}} </td>
            <td>{{$member->birthday}} </td>
            <td>{{$member->sex}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/members/{{$member->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/members/{{$member->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
    </table>

</body>

</html>