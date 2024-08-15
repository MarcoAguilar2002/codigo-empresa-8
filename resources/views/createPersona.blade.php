@extends('layouts.main')

@section('title','Crear Persona')

@section('content')
<div class="mt-3">
    <h2>Registrar Persona</h2>
</div>

<div class="card mt-3">
    <div class="card-body">
        <form action="{{ route('personas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cPerApellido">Apellido</label>
                <input type="text" class="form-control @error('cPerApellido') is-invalid @enderror" id="cPerApellido" name="cPerApellido" value="{{ old('cPerApellido') }}">
                <span class="text-danger">{{$errors->first('cPerApellido')}}</span>
            </div>
            <div class="form-group">
                <label for="cPerNombre">Nombre</label>
                <input type="text" class="form-control @error('cPerNombre') is-invalid @enderror" id="cPerNombre" name="cPerNombre" value="{{ old('cPerNombre') }}">
               <span class="text-danger"> {{$errors->first('cPerNombre')}}</span>
            </div>
            <div class="form-group">
                <label for="cPerDireccion">Dirección</label>
                <input type="text" class="form-control @error('cPerDireccion') is-invalid @enderror" id="cPerDireccion" name="cPerDireccion" value="{{ old('cPerDireccion') }}">
                <span class="text-danger">{{$errors->first('cPerDireccion')}}</span>
            </div>
            <div class="form-group">
                <label for="dPerFechaNac">Fecha de Nacimiento</label>
                <input type="date" class="form-control @error('dPerFechaNac') is-invalid @enderror" id="dPerFechaNac" name="dPerFechaNac" value="{{ old('dPerFechaNac') }}">
                <span class="text-danger">{{$errors->first('dPerFechaNac')}}</span>
            </div>
            
            <div class="form-group">
                <label for="nPerEdad">Edad</label>
                <input type="number" class="form-control @error('nPerEdad') is-invalid @enderror" id="nPerEdad" name="nPerEdad" value="{{ old('nPerEdad') }}">
                <span class="text-danger">{{$errors->first('nPerEdad')}}</span>
            </div>

            <div class="form-group">
                <label for="cPerSexo">Sexo</label>
                <select class="form-control @error('cPerSexo') is-invalid @enderror" id="cPerSexo" name="cPerSexo">
                    <option value="Masculino" {{ old('cPerSexo') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('cPerSexo') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
                <span class="text-danger">{{$errors->first('cPerSexo')}}</span>
            </div>

            <div class="form-group">
                <label for="nPerSueldo">Sueldo</label>
                <input type="number" class="form-control @error('nPerSueldo') is-invalid @enderror" step="0.01" id="nPerSueldo" name="nPerSueldo" value="{{ old('nPerSueldo') }}">
                <span class="text-danger">{{$errors->first('nPerSueldo')}}</span>
            </div>
            <div class="form-group">
                <label for="cPerEstado">Estado</label>
                <select class="form-control @error('cPerEstado') is-invalid @enderror" id="cPerEstado" name="cPerEstado">
                    <option value="1" {{ old('cPerEstado') == '1' ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('cPerEstado') == '0' ? 'selected' : '' }}>Inactivo</option>
                </select>
                <span class="text-danger">{{$errors->first('cPerEstado')}}</span>
            </div>

            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                <span class="text-danger">{{ $errors->first('image') }}</span>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
