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
        <div>
        <label>Actividades: </label><select name="activity_id">
            @foreach($activities as $activity)
        <option value="{{ $activity->id }}">{{ $activity->name }}</option>  
        @endforeach
        </select>
        </div>
        
        <div>
            <label for="mes">Mes</label>
            <input type="number" name="mes" max="12" min="1">
        </div>
        
        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

        <div>
            <input type="submit" value="Crear">
        </div>
    </form>
</body>

</html>