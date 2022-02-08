<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/booking.js"></script>
</head>

<body>

    <h1>Seleccionar actividad</h1>
    <form action="" id="formulario">
        @csrf
        <label>Actividades: </label><select id="activity_id" name="activity_id">
            @foreach($activities as $activity)
            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
            @endforeach
        </select>
    </form>

    <div id="destino">
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/js/booking.js"></script>
</body>

</html>