@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-5 offset-sm-2">
            <h1 class="display-3">Ver evento</h1>
    <form method="post" action="{{ route('events.index' )}}">
        @csrf
        <div class="form-group">
            <label for="first_name">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $events['nombre'] }}" disabled/>
        </div>
        <div class="form-group">
            <label for="last_name">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="{{ $events['descripcion'] }}" disabled/>
        </div>

        <div class="form-group">
            <label for="email">Siglas:</label>
            <input type="text" class="form-control" name="siglas" value="{{ $events['siglas'] }}" disabled/>
        </div>
        <div class="form-group">
            <label for="city">Capacidad:</label>
            <input type="number" class="form-control" name="capacidad" value="{{ $events['capacidad'] }}"disabled/>
        </div>
        <div class="form-group">
            <label for="country">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="{{ $events['fecha'] }}" disabled/>
        </div>
        <button type="submit" class="btn btn-primary">Salir</button>
    </form>
        </div>
    </div>
@endsection
