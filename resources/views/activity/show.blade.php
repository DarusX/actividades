@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>Actividad</strong></h1>
        <div class="form-group">
            <label for="">Actividad</label>
            <p class="form-control-static">{{$activity->activity}}</p>
        </div>
        <div class="form-group">
            <label for="">Puntos</label>
            <p class="form-control-static">{{$activity->points}}</p>
        </div>
        <div class="form-group">
            <label for="">Estimado</label>
            <p class="form-control-static">{{\Carbon\Carbon::createFromFormat('Y-m-d',$activity->estimated)->formatLocalized('%a %d %b %Y')}}</p>
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            {!!$activity->description!!}
        </div>
        <div class="form-group">
            <label for="">Estatus</label>
            <p class="form-control-static">{{($activity->status == 'Y')?'Finalizada':'Pendiente'}}</p>
        </div>
        <div class="form-group">
            <label for="">Calificación</label>
            <p class="form-control-static">{{$activity->score}}</p>
        </div>
        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-default">Regresar</a>
        </div>
</div>
@endsection