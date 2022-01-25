<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Roles</h1>
    <a href="/users/create" class="btn btn-primary float-right">Nuevo</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nombre</th>
        </tr>
        @forelse ($roles as $role)
        <tr>
            <td>{{$role->name}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/roles/{{$role->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/roles/{{$role->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
    </table>

</body>

</html>