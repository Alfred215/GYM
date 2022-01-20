<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Usuarios</h1>
    <a href="/users/create" class="btn btn-primary float-right">Nuevo</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Dni</th>
            <th>Email</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Fecha de nacimiento</th>
            <th>Sexo</th>
        </tr>
        @forelse ($users as $user)
        <tr>
            <td>{{$user->name}} </td>
            <td>{{$user->dni}} </td>
            <td>{{$user->email}}</td>
            <td>{{$user->weight}} </td>
            <td>{{$user->height}} </td>
            <td>{{$user->birthday}} </td>
            <td>{{$user->sex}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/users/{{$user->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/users/{{$user->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
    </table>

</body>

</html>