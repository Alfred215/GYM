<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>Documento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/bookingDate.js"></script>
</head>

<body>

    <h1>Seleccionar fecha</h1>
    <form action="">
        @csrf
        <label>Fechas: </label>
        <input type="date" id="fecha"><br>
        <input type="submit" value="Buscar" id="busqueda">
    </form>

    <div id="destino">
        <form action="" >
        <label>Actividades: </label><select id="activity_id" name="activity_id">

            </select>
            <input type="submit" value="Reservar" id="reservar">
        </form>
        
    </div>

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bookingDate.js"></script>
</body>

</html>