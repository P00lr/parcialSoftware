@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Empleado</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo:</label>
                <input type="text" class="form-control" name="nombreCompleto" required>
            </div>
            <div class="form-group">
                <label for="ci">CI:</label>
                <input type="text" class="form-control" name="ci" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fechaNacimiento" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" name="cargo" required>
            </div>
            <div class="form-group">
                <label for="salario">Salario:</label>
                <input type="text" class="form-control" name="salario" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
