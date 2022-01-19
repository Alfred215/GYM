@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Creación de una actividad</h1>

            <form action="/create" method="post">
                @csrf
                <div>
                    <label for="name">NOMBRE</label>
                    <input type="text" name="name">
                </div>

                <div>
                    <label for="days">DIA</label>
                    <input type="text" name="days">
                </div>

                <div>
                    <label for="numsession">NUMERO DE SESIONES SEMANALES</label>
                    <input type="text" name="numsession">
                </div>

                <div>
                    <label for="schedule">HORARIO</label>
                    <input type="text" name="schedule">
                </div>

                <div>
                    <label for="duration">DURACION</label>
                    <input type="text" name="duration">
                </div>

                <div>
                    <label for="nummembers">NUMERO MAX MIEMBROS</label>
                    <input type="text" name="nummembers">
                </div>

                <div>
                    <input type="submit" value="crear">
                </div>
            </form>
        </div>
    </div>

</div>
@endsectio