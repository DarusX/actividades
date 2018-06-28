@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>Actividades</strong></h1>
    <a href="{{route('activity.create')}}" class="btn btn-default">Nueva</a>
    <table class="table">
        <thead>
            <tr>
                <th>Puntos</th>
                <th>Actividad</th>
                <th>Asignada</th>
                <th>Actualizada</th>
                <th>Estimado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr class="{{($activity->status == null)?'success':''}} {{($activity->status == 'N')?'danger':''}}">
                <td>{{$activity->points}}</td>
                <td>{{$activity->activity}}</td>
                <td>{{$activity->user->name}}</td>
                <td>{{$activity->updated_at->diffForHumans()}}</td>
                <td>{{$activity->estimated}}</td>
                <td>
                    <a href="{{route('activity.show', $activity)}}" class="btn btn-primary btn-xs"><i class="fas fa-folder-open"></i></a>
                    <a href="{{route('activity.edit', $activity)}}" class="btn btn-success btn-xs"><i class="fas fa-pen"></i></a>
                    <a href="{{route('activity.destroy', $activity)}}" class="btn btn-danger btn-xs destroy"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection