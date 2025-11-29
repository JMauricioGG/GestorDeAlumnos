@extends('layouts.app')

@section('title', 'Detalle de Tarea')

@section('content')
<h1>{{ $tarea->nombre }}</h1>

<p><strong>Descripción:</strong> {{ $tarea->descripcion }}</p>
<p><strong>Fecha de entrega:</strong> {{ $tarea->fecha_entrega }}</p>
<p><strong>Usuario:</strong> {{ $tarea->user->name }}</p>

<a href="{{ route('tareas.index') }}" class="btn btn-secondary">Volver</a>

@if($tarea->user_id === auth()->id())
    <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Eliminar</button>
    </form>
@endif
@endsection
