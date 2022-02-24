<!DOCTYPE html>
<html lang="es">
@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Crear una actividad</h1><br>
    <form action="/activities" method="post">
        @csrf
        <div>
            <label for="name">NOMBRE</label>
            <input type="text" name="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="descrip">Descripción</label>
            <input type="text" name="descrip">
            @error('descrip')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="duration">DURACION</label>
            <input type="text" name="duration">
            @error('duration')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="nummembers">NUMERO MAX MIEMBROS</label>
            <input type="text" name="nummembers">
            @error('nummembers')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="submit" value="Crear">
        </div>
    </form>
</body>

</html>