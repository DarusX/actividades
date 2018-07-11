@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>Actividad</strong></h1>
        <div class="form-group">
            <label for="">Actividad</label>
            <input type="text" name="activity" class="form-control" value="{{$activity->activity}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Puntos</label>
            <input type="number" name="points" class="form-control" value="{{$activity->points}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Estimado</label>
            <input type="date" name="estimated" class="form-control" value="{{$activity->estimated}}" disabled>
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <textarea name="description" rows="10" class="form-control" disabled>{{$activity->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Estatus</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" disabled value="Y" {{($activity->status == 'Y')?'checked':'' }}> Finalizada
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" disabled value="N" {{($activity->status == 'N')?'checked':'' }}> No Finalidad
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="">Calificación</label>
            <input type="number" name="score" class="form-control" value="{{$activity->score}}" disabled>
        </div>
        <div class="form-group">
            <a href="{{URL::previous()}}" class="btn btn-default">Regresar</a>
        </div>
</div>
@endsection