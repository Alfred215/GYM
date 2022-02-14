<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/booking.js"></script>
</head>

<body>

    <h1>Seleccionar actividad</h1>
    <form action="">
        @csrf
        <label>Actividades: </label><select id="activity_id" name="activity_id">
            @foreach($activities as $activity)
            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Buscar" id="formulario">
    </form>

    <div id="destino">
        <input type="hidden" id="user_id" value="{{ Auth::user()->id }}">
        <form action="" >
        <label>Sessiones: </label><select id="session_id" name="session_id">

            </select>
            <input type="submit" value="Reservar" id="reservar">
        </form>
        
    </div>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/booking.js"></script>
</body>

</html>