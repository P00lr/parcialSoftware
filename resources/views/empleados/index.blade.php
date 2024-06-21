@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Empleados</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Agregar Empleado</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2">
                {{ $message }}
            </div>
        @endif
        <table class="table table-bordered mt-2">
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>CI</th>
                <th>Teléfono</th>
                <th>Fecha de Nacimiento</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Acciones</th>
            </tr>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->nombreCompleto }}</td>
                <td>{{ $empleado->ci }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->fechaNacimiento }}</td>
                <td>{{ $empleado->email }}</td>
                <td>{{ $empleado->direccion }}</td>
                <td>{{ $empleado->cargo }}</td>
                <td>{{ $empleado->salario }}</td>
                <td>
                    <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
