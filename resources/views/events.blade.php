@extends('layouts.app')

@section('content')



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
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>




<div class="row">
    <div class="col-sm-10">
        <h3 class="display-4" align="center">Eventos</h3>
        <table class="table">
            <div>
                <a class="btn btn-primary" data-toggle="modal" href="" data-target="#myModal">Crear evento</a>
            </div>
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
                <a href="" class="btn btn-primary"data-toggle="modal"  data-target="#myModaleditar{{ $event['id_evento'] }}">Edit</a>
            </td>
            <td>
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <div class="modal fade" id="myModaleditar{{ $event['id_evento'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar un evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="first_name">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" value="{{ $event['nombre'] }}" required/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Descripcion:</label>
                                <input type="text" class="form-control" name="descripcion" value="{{ $event['descripcion'] }}" required/>
                            </div>

                            <div class="form-group">
                                <label for="email">Siglas:</label>
                                <input type="text" class="form-control" name="siglas" value="{{ $event['siglas'] }}"required/>
                            </div>
                            <div class="form-group">
                                <label for="city">Capacidad:</label>
                                <input type="number" class="form-control" name="capacidad" value="{{ $event['capacidad'] }}"required/>
                            </div>
                            <div class="form-group">
                                <label for="country">Fecha:</label>
                                <input type="date" class="form-control" name="fecha" value="{{ $event['fecha'] }}"required/>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



    @endforeach
    </tbody>
</table>
    </div>
</div>
@endsection
