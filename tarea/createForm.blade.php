@extends("layouts.plantilla")
@section("principal")
    @if(isset($proyecto))
        <h1>Editar un proyecto</h1>
    @else
        <h1>Crear un nuevo proyecto</h1>
    @endif
     @if($errors->any())
        <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
        @endforeach
     @endif
    </ul>
    <form method="post" action=" {{ isset($proyecto) ? route("proyectos.update", ["proyecto"=> $proyecto->id]): route("proyectos.store") }}" >
        @csrf
        @if(isset($proyecto))
            @method('put')
        @endif

        <div class="row">
            <div class="col-8">
                <div class="form-floating">
                    <input type="text" class="form-control" id="id_text" placeholder="id" name="id" value="{{ isset($proyecto) ? $proyecto->id: old("id") }}">
                    <label for="id_text">Id</label>
                </div>
            <div class="col-8">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nombre_text" placeholder="nombre" name="nombre" value="{{ isset($proyecto) ? $proyecto->nombre: old("nombre") }}">
                    <label for="nombre_text">Nombre</label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-floating">
                    <input type="text" class="form-control" id="estado_text" placeholder="estado" name="estado" value="{{ isset($proyecto) ? $proyecto->estado: old("estado") }}">
                    <label for="estado_text">Nombre</label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="FechaI_text" placeholder="FechaI" name="FechaI" value="{{ isset($proyecto) ? $proyecto->Fecha_inicio: old("Fecha_inicio") }}" >
                    <label for="FechaI_text">Fecha de inicio</label>
                </div>
            </div>
        </div>
        <br>
        <div class="form-floating">
            <input type="text" class="form-control" id="fechaF_text" placeholder="fecha de finalizacion" name="fechaF" value="{{ isset($proyecto) ? $proyecto->fecha_fin: old("fecha_fin") }}" >
            <label for="fechaF_text">Fecha de inicio</label>
        </div>
        <br>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Descripcion" id="descripcion_textarea" style="height: 100px" name="descripcion"> {{ isset($proyecto) ? $proyecto->descripcion:old("descripcion") }}</textarea>
            <label for="descripcion_textarea">Descripcion</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="proyectoId_text" placeholder="id de proyecto" name="proyectoId" value="{{ isset($proyecto) ? $proyecto->fecha_fin: old("proyecto_id") }}" >
            <label for="proyectoId_text">ID del Proyecto</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="usuarioId_text" placeholder="id de usuario" name="usuarioId" value="{{ isset($proyecto) ? $proyecto->fecha_fin: old("usuario_id") }}" >
            <label for="usuarioId_text">ID del Usuario</label>
        </div>


        <br>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            <a href="{{ route("proyectos.index") }}" class="btn btn-warning">Atrás</a>
        </div>

    </form>
@endsection
