@extends('layouts.main')

@section('title','Personas')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1 class="mt-4">Lista de Personas</h1>
    <a class="btn btn-primary" href="{{route('personas.create')}}" role="button"><i class="bi bi-person-plus-fill"></i> Agregar Persona</a>
</div>

    <table class="table table-bordered table-striped mt-4">
        <thead class="table-primary">
            <tr>
                <th class="text-center" scope="col">Código</th>
                <th class="text-center" scope="col">Apellido</th>
                <th class="text-center" scope="col">Nombre</th>
                <th class="text-center" scope="col">Dirección</th>
                <th class="text-center" scope="col">Fecha de Nacimiento</th>
                <th class="text-center" scope="col">Edad</th>
                <th class="text-center" scope="col">Sexo</th>
                <th class="text-center" scope="col">Sueldo</th>
                <th class="text-center" scope="col">Rnd</th>
                <th class="text-center" scope="col">Estado</th>
                <th class="text-center" scope="col">Remember Token</th>
                <th class="text-center" scope="col">Creado</th>
                <th class="text-center" scope="col">Actualizado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td class="text-center">{{ $persona->nPerCodigo }}</td>
                    <td class="text-center">{{ $persona->cPerApellido }}</td>
                    <td class="text-center">{{ $persona->cPerNombre }}</td>
                    <td class="text-center">{{ $persona->cPerDireccion }}</td>
                    <td class="text-center">{{ $persona->dPerFecNac }}</td>
                    <td class="text-center">{{ $persona->nPerEdad }}</td>
                    <td class="text-center">{{ $persona->cPerSexo }}</td>
                    <td class="text-center">{{ $persona->nPerSueldo }}</td>
                    <td class="text-center">{{ $persona->cPerRnd }}</td>
                    <td class="text-center">{{ $persona->cPerEstado }}</td>
                    <td class="text-center">{{ $persona->remember_token }}</td>
                    <td class="text-center">{{ $persona->created_at }}</td>
                    <td class="text-center">{{ $persona->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection