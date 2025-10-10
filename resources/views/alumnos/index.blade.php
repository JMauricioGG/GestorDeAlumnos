<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
</head>
<body>
    <h1>Listado de Alumnos</h1>

    <a href="{{ route('alumnos.create') }}">Agregar Alumno</a>

    <table border="1" cellpadding="8">
        <thead>
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
                        <a href="{{ route('alumnos.show', $alumno) }}">Ver</a> |
                        <a href="{{ route('alumnos.edit', $alumno) }}">Editar</a> |
                        <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Seguro que deseas eliminar este alumno?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">No hay alumnos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
