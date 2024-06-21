@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Detalle del Empleado</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $empleado->id }}</td>
            </tr>
            <tr>
                <th>Nombre Completo</th>
                <td>{{ $empleado->nombreCompleto }}</td>
            </tr>
            <tr>
                <th>CI</th>
                <td>{{ $empleado->ci }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $empleado->telefono }}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento</th>
                <td>{{ $empleado->fechaNacimiento }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $empleado->email }}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{ $empleado->direccion }}</td>
            </tr>
            <tr>
                <th>Cargo</th>
                <td>{{ $empleado->cargo }}</td>
            </tr>
            <tr>
                <th>Salario</th>
                <td>{{ $empleado->salario }}</td>
            </tr>
        </table>
        <a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
@endsection
