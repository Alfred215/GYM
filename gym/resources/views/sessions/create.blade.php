<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>Crear sessiones</h1><br>
    <form action="/sessions" method="post">
        <div>
        @csrf
        <label>Actividades: </label><select name="activity_id">
            @foreach($activities as $activity)
        <option value="{{ $activity->id }}">{{ $activity->name }}</option>
        @endforeach
        </select>
        @error('activity_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="dias">Dias de la semana(LMXJV)</label>
            <input type="text" name="dias">
            @error('dias')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="mes">Mes</label>
            <input type="number" name="mes" max="12" min="1">
            @error('mes')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="start_time">Hora de inicio</label>
            <input type="time" name="start_time">
            @error('start_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="end_time">Hora de fin</label>
            <input type="time" name="end_time">
            @error('end_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="submit" value="Crear">
        </div>
    </form>
</body>

</html>