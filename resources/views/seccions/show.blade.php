@extends('layouts.app')

@section('title', 'Detalle de Sección')

@section('content')
<h1>Sección: {{ $seccion->seccion }} - Aula: {{ $seccion->aula }}</h1>

<h3>Alumnos inscritos:</h3>
<ul>
    @foreach($seccion->alumnos as $alumno)
        <li>{{ $alumno->nombre }}</li>
    @endforeach
</ul>

<h3>Agregar Alumno:</h3>
<form action="{{ route('secciones.alumnos.store', $seccion) }}" method="POST">
    @csrf
    <select name="alumno_id" required>
        @foreach($alumnos as $alumno)
            <option value="{{ $alumno->id }}">{{ $alumno->nombre }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Inscribir</button>
</form>
@endsection
