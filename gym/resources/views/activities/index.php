@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        <h1>Lista de actividades</h1><br>
        <a href="/activities/create" class="btn btn-primary float-right">Nuevo</a>
        <br>
        <br>
        <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Días</th>
            <th>Número de sesiones</th>
            <th>Horario</th>
            <th>Duración</th>
            <th>Número maximo de participantes</th>
        </tr>
        @forelse ($activities as $activity)
        <tr>
            <td>{{$activity->name}} </td>
            <td>{{$activity->days}} </td>
            <td>{{$activity->numsession}} </td>
            <td>{{$activity->schedule}} </td>
            <td>{{$activity->duration}} </td>
            <td>{{$activity->nummembers}} </td>
            <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}">Ver</a></td>
            <td> <a class="btn btn-primary btn-sm" href="/activities/{{$activity->id}}/edit">Editar</a></td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No hay actividades registradas</td>
        </tr>
        @endforelse
        </table>