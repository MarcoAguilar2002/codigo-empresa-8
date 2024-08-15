@extends('layouts.main')

@section('title','Personas')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1 class="mt-4">Lista de Personas</h1>
    @auth
    <a class="btn btn-primary" href="{{ route('personas.create') }}" role="button"><i class="bi bi-person-plus-fill"></i> Agregar Persona</a>
    @endauth
</div>

<div class="mt-3">
    <form method="GET" action="{{ route('personas.index') }}">
        <div class="row">
            <div class="col-md-4">
                <select name="estado" class="form-control" onchange="this.form.submit()">
                    <option value="todos" {{ $estado == 'todos' ? 'selected' : '' }}>Todos</option>
                    <option value="activo" {{ $estado == 'activo' ? 'selected' : '' }}>Activos</option>
                    <option value="inactivo" {{ $estado == 'inactivo' ? 'selected' : '' }}>Inactivos</option>
                </select>
            </div>
        </div>
    </form>
</div>

<table class="table table-bordered table-striped mt-4">
    <thead class="table-primary">
        <tr>
            <th class="text-center" scope="col">Código</th>
            <th class="text-center" scope="col">Apellido</th>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
            <tr>
                <td class="text-center align-middle">{{ $persona->nPerCodigo }}</td>
                <td class="text-center align-middle">{{ $persona->cPerApellido }}</td>
                <td class="text-center align-middle">{{ $persona->cPerNombre }}</td>
                <td class="text-center align-middle">
                    <a href="{{ route('personas.show',$persona->nPerCodigo) }}" class="btn btn-warning btn-sm me-2" ><i class="bi bi-eye-fill"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
