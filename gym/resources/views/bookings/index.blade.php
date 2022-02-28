<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Reservas</h1>
    <a href="/bookings/create" class="btn btn-primary float-left">Reservar por actividad</a>
    <a href="/bookings/date" class="btn btn-primary float-left">Reservar por fecha</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Fecha</th>
            <th>Usuario</th>
        </tr>
        @forelse ($bookings as $booking)
        <tr>
            <td>{{$booking->fecha}} </td>
            <td>{{$booking->user_id}} </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay estudios registrados</td>
        </tr>
        @endforelse
    </table>
</body>

</html>