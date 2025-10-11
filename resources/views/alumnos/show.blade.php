@extends('layout')

@section('title', 'Detalle del Alumno')

@section('content')
<h1>Detalle del Alumno</h1>

<ul class="list-group">
    <li class="list-group-item"><strong>Código:</strong> {{ $alumno->codigo }}</li>
    <li class="list-group-item"><strong>Nombre:</strong> {{ $alumno->nombre }}</li>
    <li class="list-group-item"><strong>Correo:</strong> {{ $alumno->correo }}</li>
    <li class="list-group-item"><strong>Fecha de nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</li>
    <li class="list-group-item"><strong>Sexo:</strong> {{ $alumno->sexo }}</li>
    <li class="list-group-item"><strong>Carrera:</strong> {{ $alumno->carrera }}</li>
</ul>

<br>
<a href="{{ route('alumnos.index') }}" class="btn btn-secondary">← Volver al listado</a>
@endsection
