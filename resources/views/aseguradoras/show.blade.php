@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la aseguradora: {{ $aseguradora->nombre }}</h1>

        <table class="table">
            <tr>
                <th>Clave Aseguradora:</th>
                <td>{{ $aseguradora->clave_aseguradora }}</td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td>{{ $aseguradora->nombre }}</td>
            </tr>
            <tr>
                <th>Fecha Inicial:</th>
                <td>{{ $aseguradora->fecha_inicial }}</td>
            </tr>
            <tr>
                <th>Fecha Final:</th>
                <td>{{ $aseguradora->fecha_final }}</td>
            </tr>
            <tr>
                <th>Número de Seguro:</th>
                <td>{{ $aseguradora->no_seguro }}</td>
            </tr>
        </table>

        <a href="{{ route('aseguradoras.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
