<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Crear un miembro</h1><br>
    <form action="/members/" method="post">
        @csrf
        <div>
            <label for="dni">DNI</label>
            <input type="text" name="dni">
        </div>

        <div>
            <label for="name">NOMBRE COMPLETO</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="weight">PESO</label>
            <input type="text" name="weight">
        </div>

        <div>
            <label for="height">ALTURA</label>
            <input type="text" name="height">
        </div>

        <div>
            <label for="birthday">FECHA NACIMIENTO</label>
            <input type="text" name="birthday">
        </div>

        <div>
            <label for="sex">SEXO</label>
            <input type="text" name="sex">
        </div>

        <div>
            <input type="submit" value="crear">
        </div>
    </form>
</body>

</html>