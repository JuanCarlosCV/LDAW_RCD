@extends('layouts.app')

@section('content')

<div class="container">

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear un evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('events.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">Nombre:</label>
                            <input type="text" class="form-control" name="nombre"required/>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Descripcion:</label>
                            <input type="text" class="form-control" name="descripcion"required/>
                        </div>

                        <div class="form-group">
                            <label for="email">Siglas:</label>
                            <input type="text" class="form-control" name="siglas"required/>
                        </div>
                        <div class="form-group">
                            <label for="city">Capacidad:</label>
                            <input type="number" class="form-control" name="capacidad"required/>
                        </div>
                        <div class="form-group">
                            <label for="country">Fecha:</label>
                            <input type="date" class="form-control" name="fecha"required/>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar Evento</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>




<div class="row">
    <div class="col-sm-10">
        <h3 class="display-4" align="center">Eventos</h3>
        <table class="table">
            <div>
                <a class="btn btn-primary float-right" data-toggle="modal" href="" data-target="#myModal">Crear evento</a>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Siglas</th>
        <th scope="col">Capacidad</th>
        <th scope="col">Fecha</th>
    </tr>
    </thead>
    <tbody>
    @foreach($events as $event)
        <tr>
            <td>{{$event['id_evento']}}</td>
            <td>{{$event['nombre']}} </td>
            <td>{{$event['descripcion']}}</td>
            <td>{{$event['siglas']}}</td>
            <td>{{$event['capacidad']}}</td>
            <td>{{$event['fecha']}}</td>
            <td>
                <a href="{{ route('events.show',$event['id_evento']) }}"> <button class="btn btn-success" type="submit">View</button></a>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="{{ route('events.show',$event['id_evento']) }}"><button class="btn btn-danger" type="submit">Delete</button></a>
            </td>
            <td>

            </td>
        </tr>



    @endforeach




    </tbody>
</table>



    </div>
</div>
</div>
@endsection
