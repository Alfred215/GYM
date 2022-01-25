<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Crear sessiones</h1><br>
    <form action="/sessions" method="post">
        @csrf
        <input type="text" name="activity_id" value="poner $activity ">
        <div>
            <label for="dias">Dias de la semana(LMXJV)</label>
            <input type="text" name="dias">
        </div>

        <div>
            <label for="start_time">Hora de inicio</label>
            <input type="text" name="start_time">
        </div>
        <div>
            <label for="end_time">Hora de fin</label>
            <input type="text" name="end_time">
        </div>
        <div>
            <input type="submit" value="Crear">
        </div>
    </form>
</body>

</html>