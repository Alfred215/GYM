<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actividad</h1>


    <ul>
    <li>
            <strong>Nombre</strong>
            {{ $activity->name }}
        </li>
        <li>
            <strong>Dias</strong>
            {{ $activity->days }}
        </li>
        <li>
            <strong>Número de sesiones</strong>
            {{ $activity->numsession }}
        </li>
        <li>
            <strong>Horario</strong>
            {{ $activity->schedule }}
        </li>
        <li>
            <strong>Duración</strong>
            {{ $activity->duration }}
        </li>
        <li>
            <strong>Número de miembros</strong>
            {{ $activity->nummembers }}
        </li>
    </ul>
</body>
</html>