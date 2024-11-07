@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar aseguradora</h1>

        <form action="{{ route('aseguradoras.update', $aseguradora->clave_aseguradora) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="clave_aseguradora" class="form-label">Clave Aseguradora</label>
                <input type="number" name="clave_aseguradora" class="form-control" value="{{ $aseguradora->clave_aseguradora }}" readonly>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $aseguradora->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="fecha_inicial" class="form-label">Fecha Inicial</label>
                <input type="datetime-local" name="fecha_inicial" class="form-control" value="{{ $aseguradora->fecha_inicial }}" required>
            </div>

            <div class="mb-3">
                <label for="fecha_final" class="form-label">Fecha Final</label>
                <input type="datetime-local" name="fecha_final" class="form-control" value="{{ $aseguradora->fecha_final }}" required>
            </div>

            <div class="mb-3">
                <label for="no_seguro" class="form-label">Número de Seguro</label>
                <input type="text" name="no_seguro" class="form-control" value="{{ $aseguradora->no_seguro }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('aseguradoras.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
