<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Usuario</h1>
    <ul>
        <li>
            <strong>Nombre</strong>
            {{ $user->name }}
        </li>
        <li>
            <strong>DNI</strong>
            {{ $user->dni }}
        </li>
        <li>
            <strong>Email</strong>
            {{ $user->email }}
        </li>
        <li>
            <strong>Peso</strong>
            {{ $user->weight }}
        </li>
        <li>
            <strong>Altura</strong>
            {{ $user->height }}
        </li>
        <li>
            <strong>Fecha de Nacimiento</strong>
            {{ $user->birthday }}
        </li>
        <li>
            <strong>Sexo</strong>
            {{ $user->sex }}
        </li>
        <li>
            <strong>Rol</strong>
            {{ $user->role->name }}
        </li>
    </ul>

    <h1>Sesiones reservadas</h1>

    @foreach($bookings as $booking)
    <ul>
        <li>Hora: {{$booking->users->id}}</li>
        
    </ul>    
    @endforeach
</body>

</html>