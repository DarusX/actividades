@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>Actividades</strong></h1>
    <a href="{{route('activity.create')}}" class="btn btn-default">Nueva</a>
    <table class="table">
        <thead>
            <tr>
                <th>Puntos</th>
                <th>Calificación</th>
                <th>Actividad</th>
                <th>Asignada</th>
                <th>Actualizada</th>
                <th>Estimado</th>
                <th>Restante</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
            <tr class="{{($activity->status == null)?'success':''}} {{($activity->status == 'N')?'danger':''}}">
                <td>{{$activity->points}}</td>
                <td>{{$activity->score}}</td>
                <td><a href="{{route('activity.show', $activity)}}">{{$activity->activity}}</a></td>
                <td><a href="{{route('user.show', $activity->user)}}">{{$activity->user->name}}</a></td>
                <td>{{$activity->updated_at->diffForHumans()}}</td>
                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$activity->estimated)->formatLocalized('%a %d %b %Y')}}</td>
                <td>{{$activity->remaining}}</td>
                <td>
                    <a href="{{route('activity.show', $activity)}}" class="btn btn-default btn-xs"><i class="fas fa-external-link-alt"></i></a>
                    <a href="{{route('activity.edit', $activity)}}" class="btn btn-default btn-xs"><i class="fas fa-pen"></i></a>
                    <a href="{{route('activity.reminder', $activity)}}" class="btn btn-default btn-xs"><i class="fas fa-envelope"></i></i></a>
                    <a href="{{route('activity.destroy', $activity)}}" class="btn btn-danger btn-xs destroy"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection