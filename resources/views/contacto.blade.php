@extends('layouts.main')

@section('title', 'Contacto')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4" style="width: 100%; max-width: 600px;">
        <h2 class="card-title text-center">Contáctanos</h2>

        @if(session('estado'))
            {{session('estado')}}
        @else
        <form action="{{ route('contacto') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"  value="{{old('nombre')}}">
                {{$errors->first('nombre')}}
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                {{$errors->first('email')}}
            </div>
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" id="asunto" name="asunto" class="form-control" placeholder="Asunto" value="{{old('asunto')}}">
                {{$errors->first('asunto')}}
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Mensaje" rows="4" value="{{old('mensaje')}}"></textarea>
                {{$errors->first('mensaje')}}
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>
        </form>
        @endif
    </div>
</div>
@endsection
