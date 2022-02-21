<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <br>
            <div class="col-lg-2" style="background-color: grey; padding:10px;">        
                <a href="/users" style="padding:5px; color:white;">Users</a>
                <a href="/activities" style="padding:5px; color:white;">Actividades</a>
                <a href="/sessions/create" style="padding:5px; color:white;">Sesiones</a>
                <a href="/bookings" style="padding:5px; color:white;">Bookings</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="float:right; color:white;">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                </form>
            </div>
        </div>
    </div>

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
            <th>Rol</th>
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
            <td>{{$user->role->name}} </td>
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