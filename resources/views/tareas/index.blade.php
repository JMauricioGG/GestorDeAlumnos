@extends('layouts.app')

@section('title', 'Listado de Tareas')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Tareas</h1>
    <a href="{{ route('tareas.create') }}" class="btn btn-primary">Nueva Tarea</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Fecha de Entrega</th>
            <th>Usuario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tareas as $tarea)
        <tr>
            <td>{{ $tarea->id }}</td>
            <td><a href="{{ route('tareas.show', $tarea) }}">{{ $tarea->nombre }}</a></td>
            <td>{{ $tarea->descripcion }}</td>
            <td>{{ $tarea->fecha_entrega }}</td>
            <td>{{ $tarea->user->name }}</td>
            <td>
                @if($tarea->user_id === auth()->id())
                    <a href="{{ route('tareas.edit', $tarea) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
