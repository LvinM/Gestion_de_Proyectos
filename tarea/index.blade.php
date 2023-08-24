@extends('layouts.plantilla')

@section('principal')

    <h1>Lista de tareas</h1>

    @if(session('mensaje'))
        <div class="alert alert-success" role="alert">
            {{ session('mensaje') }}
        </div>
    @endif


    <a href="{{ route("tarea.create") }}" class="btn btn-primary">Nuevo</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">ESTADO</th>
            <th scope="col">Fecha de Inicio</th>
            <th scope="col">Fecha de Finalización</th>
            <th scope="col">ID de Proyecton</th>
            <th scope="col">ID de Usuario</th>


        </tr>
        </thead>
        <tbody>

        @foreach($tareas as $tarea)
            <tr>
                <th scope="row">{{ $tarea->id }}</th>
                <td> {{ $tarea->nombre }}</td>
                <td> {{ $tarea->descripcion }}</td>
                <td> {{ $tarea->estado }}</td>
                <td> {{ $tarea->fecha_inicio}}</td>
                <td> {{ $tarea->fecha_fin}}</td>
                <td> {{ $tarea->proyecto_id}}</td>
                <td> {{ $tarea->usuario_id}}</td>

                <td> <a class="btn btn-success" href="{{ route("tareas.show", ["tarea"=> $tarea->id]) }}">Ver</a>
                    <a class="btn btn-warning" href="{{ route("tareas.edit", ["tarea"=> $tarea->id]) }}">Editar</a>

                    <!-- Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalConfirmar{{$tarea->id}}">
                        Eliminar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalConfirmar{{$tarea->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¿Realmente quiere eliminar al tarea {{ $tarea->nombre }}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <form method="post" action="{{ route("tareas.destroy", ["tarea"=>$tarea->id]) }}">
                                        @method("delete")
                                        @csrf
                                        <input type="submit" value="Eliminar" class="btn btn-danger">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </td>
            </tr>

        @endforeach



        </tbody>

    </table>
    {{ $tareas->links() }}

@endsection
