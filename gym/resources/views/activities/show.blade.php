<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
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
            <strong>Descripción</strong>
            {{ $activity->descrip }}
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

    <h1>Sessiones</h1>
    
    @foreach($activity->sessions as $session)
    <ul>
        <li>Fecha: {{$session->date_session}}</li>
        <li>Hora de inicio: {{$session->start_time}}</li>
        <li>Hora de fin: {{$session->end_time}}</li>
        <li>Usuarios:</li>
        @foreach($session->users as $user)
        <ul>
            <li>Nombre: {{$user->name}}</li>
        </ul>
        @endforeach 
    </ul>        
    @endforeach
</body>
</html>