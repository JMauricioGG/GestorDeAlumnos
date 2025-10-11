@extends('layout')

@section('title', 'Agregar Alumno')

@section('content')
<h1>Agregar Alumno</h1>

<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Código:</label>
        <input type="text" name="codigo" class="form-control" value="{{ old('codigo') }}">
        @error('codigo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Correo:</label>
        <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
        @error('correo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento') }}">
        @error('fecha_nacimiento') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Sexo:</label>
        <select name="sexo" class="form-select">
            <option value="M" {{ old('sexo') == 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ old('sexo') == 'F' ? 'selected' : '' }}>Femenino</option>
        </select>
        @error('sexo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Carrera:</label>
        <input type="text" name="carrera" class="form-control" value="{{ old('carrera') }}">
        @error('carrera') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
