<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Editar un miembro</h1><br>
    <form action="/members" method="post">
        @csrf
        <div>
            <label for="dni">DNI</label>
            <input type="text" name="dni" value="{{$member->dni}}">
        </div>

        <div>
            <label for="name">NOMBRE COMPLETO</label>
            <input type="text" name="name" value="{{$member->name}}">
        </div>

        <div>
            <label for="weight">PESO</label>
            <input type="text" name="weight" value="{{$member->weight}}">
        </div>

        <div>
            <label for="height">ALTURA</label>
            <input type="text" name="height" value="{{$member->height}}">
        </div>

        <div>
            <label for="birthday">FECHA NACIMIENTO</label>
            <input type="text" name="birthday" value="{{$member->birthday}}">
        </div>

        <div>
            <label for="sex">SEXO</label>
            <input type="text" name="sex" value="{{$member->sex}}">
        </div>

        <div>
            <input type="submit" value="Editar">
        </div>
    </form>
</body>

</html>