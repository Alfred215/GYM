<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
@if(Auth::user()->role_id==3)
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
    @elseif(Auth::user()->role_id==1)
    <div class="container">
        <div class="row">
            <br>
            <div class="col-lg-2" style="background-color: grey; padding:10px;">        
                <a href="/bookings/create" style="padding:5px; color:white;">Reservar</a>
                <a href="/activity" style="padding:5px; color:white;">Actividades</a>
                <a href="/users/{{ Auth::user()->id }}" style="padding:5px; color:white;">Datos usuario</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="float:right; color:white;">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                </form>
            </div>
        </div>
    </div>
    @endif
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/js/ajax.js"></script>
</body>

</html>