<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Hola</h1><br>
    <form action="/bookings" method="POST">
        @csrf

        <label>Sessiones: </label><select name="session_id">
            @foreach($session->date_session as $date)
        <option value="{{ $session->date_session }}">{{ $date }}</option>
        @endforeach
        </select>
        
        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

        <div>
            <input type="submit" value="Crear">
        </div>
    </form>
</body>

</html>