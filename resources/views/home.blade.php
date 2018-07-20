@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>{{$user->name}}</strong></h1>
    <h4><i class="fas fa-caret-right"></i> {{$user->activities->sum('score')}}</h4>
    <small>{{$user->email}}</small>
</div>
<div class="col-sm-12">
    <legend>Actividades</legend>
    <table class="table">
        <thead>
            <tr>
                <th>Puntos</th>
                <th>Calificación</th>
                <th>Actividad</th>
                <th>Actualizada</th>
                <th>Estimado</th>
                <th>Restante</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->activities as $activity)
            <tr class="{{($activity->status == null)?'success':''}} {{($activity->status == 'N')?'danger':''}}">
                <td>{{$activity->points}}</td>
                <td>{{$activity->score}}</td>
                <td><a href="{{route('activity.show', $activity)}}">{{$activity->activity}}</a></td>
                <td>{{$activity->updated_at->diffForHumans()}}</td>
                <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$activity->estimated)->formatLocalized('%a %d %b %Y')}}</td>
                <td>{{$activity->remaining}}</td>
                <td>
                    <a href="{{route('activity.show', $activity)}}" class="btn btn-default btn-xs"><i class="fas fa-external-link-square-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection