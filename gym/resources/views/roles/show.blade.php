<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de usuario</h1>
    <ul>
    @foreach($role->users as $user)
        <li>{{$user->name}}</li>
    @endforeach
    </ul>
</body>

</html>