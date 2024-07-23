@extends('layouts.main')

@section('title', 'Detalles de Persona')

@section('content')
@auth
<div class="container mt-4">
    <h2>Detalles de Persona</h2>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4"><strong>Código:</strong></div>
                <div class="col-md-8">{{ $persona->nPerCodigo }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Apellido:</strong></div>
                <div class="col-md-8">{{ $persona->cPerApellido }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Nombre:</strong></div>
                <div class="col-md-8">{{ $persona->cPerNombre }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Dirección:</strong></div>
                <div class="col-md-8">{{ $persona->cPerDireccion }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Fecha de Nacimiento:</strong></div>
                <div class="col-md-8">{{ $persona->dPerFecNac }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Edad:</strong></div>
                <div class="col-md-8">{{ $persona->nPerEdad }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Sueldo:</strong></div>
                <div class="col-md-8">{{ $persona->nPerSueldo }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Sexo:</strong></div>
                <div class="col-md-8">{{ $persona->cPerSexo }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Rnd:</strong></div>
                <div class="col-md-8">{{ $persona->cPerRnd }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Estado:</strong></div>
                <div class="col-md-8">{{ $persona->cPerEstado }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Remember Token:</strong></div>
                <div class="col-md-8">{{ $persona->remember_token }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Creado:</strong></div>
                <div class="col-md-8">{{ $persona->created_at }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><strong>Actualizado:</strong></div>
                <div class="col-md-8">{{ $persona->updated_at }}</div>
            </div>
            <div class="text-center">
                <a href="{{ route('personas.index') }}" class="btn btn-secondary">Volver a la lista</a>
                @auth
                <a href="{{route('personas.edit', $persona)}}" class="btn btn-warning"><i class="bi bi-pencil"></i> Editar</a>
                @endauth
                <form action="{{route('personas.destroy',$persona)}}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-archive"></i> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection
