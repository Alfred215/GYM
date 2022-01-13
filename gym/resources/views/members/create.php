@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Creación de un socio</h1>

            <form action="/store" method="post">
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
                    <label for="date">FECHA NACIMIENTO</label>
                    <input type="text" name="date">
                </div>

                <div>
                    <label for="sex">SEXO</label>
                    <input type="text" name="sex">
                </div>

                <div>
                    <input type="submit" value="crear">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection