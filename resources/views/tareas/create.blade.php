@extends('layouts.app')

@section('title', 'Crear Tarea')

@section('content')
<h1>Crear Tarea</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tareas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
        <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" value="{{ old('fecha_entrega') }}">
    </div>

    <button type="submit" class="btn btn-primary">Crear Tarea</button>
    <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
