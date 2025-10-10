<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Alumno</title>
</head>
<body>
    <h1>Detalles del Alumno</h1>

    <p><strong>Código:</strong> {{ $alumno->codigo }}</p>
    <p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
    <p><strong>Correo:</strong> {{ $alumno->correo }}</p>
    <p><strong>Fecha de nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
    <p><strong>Sexo:</strong> {{ $alumno->sexo }}</p>
    <p><strong>Carrera:</strong> {{ $alumno->carrera }}</p>

    <br>
    <a href="{{ route('alumnos.index') }}">← Volver al listado</a>
</body>
</html>
