@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <h1><strong>Actividad</strong></h1>
    <form action="{{route('activity.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Actividad</label>
            <input type="text" name="activity" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Puntos</label>
            <input type="number" name="points" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Estimado</label>
            <input type="date" name="estimated" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Usuario</label>
            <select name="user_id" class="form-control">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <textarea name="description" rows="10" class="form-control" id="description"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Guardar</button>
        </div>
    </form>
</div>
@endsection
@section('js')
<script>
   CKEDITOR.replace( 'description' );
</script>
@endsection