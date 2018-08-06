@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>Usuarios</strong></h1>
    <a href="{{route('user.create')}}" class="btn btn-default">Nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Calificación</th>
                <th>Actividades</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td><a href="{{route('user.show', $user)}}">{{$user->name}}</a></td>
                <td>{{$user->activities->sum('score')}}</td>
                <td>{{$user->activities->count()}}</td>
                <td>
                    <a href="{{route('user.show', $user)}}" class="btn btn-default btn-xs"><i class="fas fa-folder-open"></i></a>
                    <a href="{{route('user.edit', $user)}}" class="btn btn-default btn-xs"><i class="fas fa-pen"></i></a>
                    <a href="{{route('user.destroy', $user)}}" class="btn btn-danger btn-xs"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection