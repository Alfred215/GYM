<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Editar un usuario</h1><br>
    <form action="/user/update" method="post">
        @csrf
        <div>
            <input type="hidden" name="id" value="{{$user->id}}">
        </div>
        <div>
            <label for="name">NOMBRE COMPLETO</label>
            <input type="text" name="name" value="{{$user->name}}">
        </div>
        <div>
            <label for="dni">DNI</label>
            <input type="text" name="dni" value="{{$user->dni}}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$user->email}}">
        </div>
        <div>
            <label for="password">Nueva password</label>
            <input type="text" name="password" value="">
        </div>
        <div>
            <label for="weight">PESO</label>
            <input type="text" name="weight" value="{{$user->weight}}">
        </div>

        <div>
            <label for="height">ALTURA</label>
            <input type="text" name="height" value="{{$user->height}}">
        </div>

        <div>
            <label for="birthday">FECHA NACIMIENTO</label>
            <input type="text" name="birthday" value="{{$user->birthday}}">
        </div>

        <div>
            <label for="sex">SEXO</label>
            <input type="text" name="sex" value="{{$user->sex}}">
        </div>
        <div>
            <label for="rol">Role_id</label>
            <input type="text" name="role_id" value="{{$user->role->id}}">
        </div>
        <div>
            <input type="submit" value="Editar">
        </div>
    </form>
</body>

</html>