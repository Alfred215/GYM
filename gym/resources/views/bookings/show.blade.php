<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fechas</h1>
    
    @foreach($activity->sessions as $session)
    <ul>
        <li>Fecha: {{$session->date_session}}</li>
        <li>Hora de inicio: {{$session->start_time}}</li>
    </ul>    
    @endforeach
    
</body>
</html>