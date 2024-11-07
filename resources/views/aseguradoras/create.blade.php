@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Nueva Aseguradora</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('aseguradoras.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="clave_aseguradora" class="form-label">Clave Aseguradora</label>
                <input type="number" name="clave_aseguradora" class="form-control" id="clave_aseguradora" value="{{ old('clave_aseguradora') }}" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-3">
                <label for="fecha_inicial" class="form-label">Fecha Inicial</label>
                <input type="datetime-local" name="fecha_inicial" class="form-control" id="fecha_inicial" value="{{ old('fecha_inicial') }}" required>
            </div>

            <div class="mb-3">
                <label for="fecha_final" class="form-label">Fecha Final</label>
                <input type="datetime-local" name="fecha_final" class="form-control" id="fecha_final" value="{{ old('fecha_final') }}" required>
            </div>

            <div class="mb-3">
                <label for="no_seguro" class="form-label">Número de Seguro</label>
                <input type="text" name="no_seguro" class="form-control" id="no_seguro" value="{{ old('no_seguro') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('aseguradoras.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
