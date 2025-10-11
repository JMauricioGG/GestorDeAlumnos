@extends('layout')

@section('title', 'Editar Alumno')

@section('content')
<h1>Editar Alumno</h1>

<form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Código:</label>
        <input type="text" name="codigo" class="form-control" value="{{ old('codigo', $alumno->codigo) }}">
        @error('codigo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $alumno->nombre) }}">
        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Correo:</label>
        <input type="email" name="correo" class="form-control" value="{{ old('correo', $alumno->correo) }}">
        @error('correo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $alumno->fecha_nacimiento) }}">
        @error('fecha_nacimiento') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Sexo:</label>
        <select name="sexo" class="form-select">
            <option value="M" {{ old('sexo', $alumno->sexo) == 'M' ? 'selected' : '' }}>Masculino</option>
            <option value="F" {{ old('sexo', $alumno->sexo) == 'F' ? 'selected' : '' }}>Femenino</option>
        </select>
        @error('sexo') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Carrera:</label>
        <input type="text" name="carrera" class="form-control" value="{{ old('carrera', $alumno->carrera) }}">
        @error('carrera') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
