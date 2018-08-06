@extends('layouts.app')
@section('content')
<div class="col-sm-12">
    <form action="{{route('user.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Aceptar</button>
        </div>
    </form>
</div>
@endsection