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
    <h1>Usuario</h1>
    <ul>
        <li>
            <strong>Nombre</strong>
            {{ $user->name }}
        </li>
        <li>
            <strong>DNI</strong>
            {{ $user->dni }}
        </li>
        <li>
            <strong>Email</strong>
            {{ $user->email }}
        </li>
        <li>
            <strong>Peso</strong>
            {{ $user->weight }}
        </li>
        <li>
            <strong>Altura</strong>
            {{ $user->height }}
        </li>
        <li>
            <strong>Fecha de Nacimiento</strong>
            {{ $user->birthday }}
        </li>
        <li>
            <strong>Sexo</strong>
            {{ $user->sex }}
        </li>
        <li>
            <strong>Rol</strong>
            {{ $user->role->name }}
        </li>
        
    </ul>

    <h1>Sesiones reservadas</h1>


    @foreach($user->sesions as $sesion)
    <ul>
        <li>Hora: {{$sesion->start_time}}</li>
        <li>Fecha: {{$sesion->date_session}}</li>
        <li>Activity: {{$sesion->activity->name}}</li>
    </ul>    
    @endforeach
</body>

</html>