<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Miembro</h1>


    <ul>
        <li>
            <strong>DNI</strong>
            {{ $member->dni }}
        </li>
        <li>
            <strong>Nombre</strong>
            {{ $member->name }}
        </li>
        <li>
            <strong>Peso</strong>
            {{ $member->weight }}
        </li>
        <li>
            <strong>Altura</strong>
            {{ $member->height }}
        </li>
        <li>
            <strong>Fecha de Nacimiento</strong>
            {{ $member->birthday }}
        </li>
        <li>
            <strong>Sexo</strong>
            {{ $member->sex }}
        </li>
    </ul>
</body>

</html>