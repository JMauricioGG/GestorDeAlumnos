@extends('layout')

@section('title', 'Listado de Alumnos')

@section('content')
<h1>Listado de Alumnos</h1>

<a href="{{ route('alumnos.create') }}" class="btn btn-success mb-3">Agregar Alumno</a>

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha de Nacimiento</th>
            <th>Sexo</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->codigo }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->correo }}</td>
            <td>{{ $alumno->fecha_nacimiento }}</td>
            <td>{{ $alumno->sexo }}</td>
            <td>{{ $alumno->carrera }}</td>
            <td>
                <a href="{{ route('alumnos.show', $alumno) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('alumnos.edit', $alumno) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este alumno?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" class="text-center">No hay alumnos registrados.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
