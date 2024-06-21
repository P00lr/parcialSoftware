@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Crear Empleado</h3>
    </div>
    <div class="card-body">
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
            @include('empleados.form')
            <button type="submit" class="btn btn-success">Crear</button>
        </form>
    </div>
</div>
@endsection
