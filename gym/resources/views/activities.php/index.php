@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        <h1>Lista de socios
            <a href="/members/create" class="btn btn-primary float-right">
                Nuevo
            </a>
        </h1>


        <table class="table table-striped">
        <tr>
            <th>Dni</th>
            <th>Nombre</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Fecha de nacimiento</th>
            <th>Sexo</th>
        </tr>
        @forelse ($members as $member)
        <tr>
            <td>{{$member->dni}} </td>
            <td>{{$member->name}} </td>
            <td>{{$member->weight}} </td>
            <td>{{$member->height}} </td>
            <td>{{$member->date}} </td>
            <td>{{$member->sex}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/members/{{$member->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/members/{{$member->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay socios registrados</td>
        </tr>
        @endforelse
        </table>





        </div>
    </div>
</div>
@endsection




