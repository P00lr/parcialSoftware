@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Empleado</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" class="form-control" name="nombreCompleto" value="{{ $empleado->nombreCompleto }}" required>
            </div>
            <div class="form-group">
                <label for="ci">CI:</label>
                <input type="text" class="form-control" name="ci" value="{{ $empleado->ci }}" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" value="{{ $empleado->telefono }}" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fechaNacimiento" value="{{ $empleado->fechaNacimiento }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $empleado->email }}" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" value="{{ $empleado->direccion }}" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" name="cargo" value="{{ $empleado->cargo }}" required>
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="text" class="form-control" name="salario" value="{{ $empleado->salario }}" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
