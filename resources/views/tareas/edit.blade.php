@extends('layouts.app')

@section('title', 'Editar Tarea')

@section('content')
<h1>Editar Tarea</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tareas.update', $tarea) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $tarea->nombre) }}" required>
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
    </div>

    <div class="mb-3">
        <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
        <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" value="{{ old('fecha_entrega', $tarea->fecha_entrega) }}">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
    <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
