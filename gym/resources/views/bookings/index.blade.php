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
    <h1>Reservas</h1>
    <a href="/bookings/create" class="btn btn-primary float-right">Reserva por actividad</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Fecha</th>
            <th>Usuario</th>
        </tr>
        @forelse ($bookings as $booking)
        <tr>
            <td>{{$booking->fecha}} </td>
            <td>{{$booking->user_id}} </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
    </table>
</body>

</html>