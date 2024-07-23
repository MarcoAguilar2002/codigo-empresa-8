@extends('layouts.main')

@section('title','Inicio')

@section('content')
<h4>Inicio</h4>
@auth
    {{auth()->user()->name}}
@endauth

@endsection