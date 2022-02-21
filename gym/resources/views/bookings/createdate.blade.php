<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/bookingDate.js"></script>
</head>

<body>
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
    <h1>Seleccionar fecha</h1>
    <form action="">
        @csrf
        <label>Fechas: </label>
        <input type="date" id="fecha"><br>
        <input type="submit" value="Buscar" id="busqueda">
    </form>

    <div id="destino">
        <form action="" >
        <label>Actividades: </label><select id="session_id" name="session_id">

            </select>
            <input type="submit" value="Reservar" id="reservar">
        </form>
        
    </div>

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bookingDate.js"></script>
</body>

</html>