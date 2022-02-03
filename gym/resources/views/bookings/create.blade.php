<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Seleccionar actividad</h1><br>
    <form action="/bookings" method="POST">
        @csrf
        <label>Actividades: </label><select name="activity_id">
            @foreach($activities as $activity)
        <option value="{{ $activity->id }}">{{ $activity->name }}</option>  
        @endforeach
        </select>

        <label>Sessiones: </label><select name="session_id">
            @foreach($activity->sessions as $session)
        <option value="{{ $session->date_session }}">{{ $session->date_session }}</option>
        @endforeach
        </select>
        
        <input type="text" id="id_user" value="{{ Auth::user()->id }}">

        <div>
            <input type="submit" value="Crear">
        </div>
    </form>
</body>

</html>