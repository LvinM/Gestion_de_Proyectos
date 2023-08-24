@extends("layouts.plantilla")

@section("principal")
    <h1>Detalles de {{ $tarea->nombre }}</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $tarea->nombre }}</h5>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $tarea->estado }}</h6>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $tarea->proyecto_id }}</h6>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $tarea->usuario_id }}</h6>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $tarea->fecha_inicio }}</h6>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $tarea->fecha_fin }}</h6>
            <p class="card-text">{{ $tarea->descripcion }}</p>
            <a class="btn btn-primary" href="{{ route("proyecto.index") }}" class="card-link">Volver al inicio</a>

        </div>
    </div>

@endsection
