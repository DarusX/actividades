@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>Actividad</strong></h1>
    <form action="{{route('activity.update', $activity)}}" method="post">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="">Actividad</label>
            <input type="text" name="activity" class="form-control" value="{{$activity->activity}}">
        </div>
        <div class="form-group">
            <label for="">Puntos</label>
            <input type="number" name="points" class="form-control" value="{{$activity->points}}">
        </div>
        <div class="form-group">
            <label for="">Estimado</label>
            <input type="date" name="estimated" class="form-control" value="{{$activity->estimated}}">
        </div>
        <div class="form-group">
            <label for="">Usuario</label>
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                <option value="{{$user->id}}" {{($activity->user_id == $user->id)?'selected':''}}>{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <textarea name="description" rows="10" class="form-control">{{$activity->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Estatus</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="Y" {{($activity->status == 'Y')?'checked':'' }}> Finalizada
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="N" {{($activity->status == 'N')?'checked':'' }}> No Finalidad
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="">Calificación</label>
            <input type="number" name="score" class="form-control" value="{{$activity->score}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Guardar</button>
        </div>
    </form>
</div>
@endsection