<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Editar una actividad</h1><br>
    <form action="/activities" method="PUT">
        @csrf
        <div>
            <label for="name">NOMBRE</label>
            <input type="text" name="name" value="{{$activity->name}}">
        </div>

        <div>
            <label for="descrip">Descripción</label>
            <input type="text" name="descrip" value="{{$activity->descrip}}">
        </div>

        <div>
            <label for="duration">DURACION</label>
            <input type="text" name="duration" value="{{$activity->duration}}">
        </div>

        <div>
            <label for="nummembers">NUMERO MAX MIEMBROS</label>
            <input type="text" name="nummembers" value="{{$activity->nummembers}}"> 
        </div>

        <div>
            <input type="submit" value="Editar">
        </div>
    </form>
</body>

</html>