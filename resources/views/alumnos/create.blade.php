<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Alumno</title>
</head>
<body>
    <h1>Agregar Alumno</h1>

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label>Código:</label>
        <input type="text" name="codigo" required><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label>Correo:</label>
        <input type="email" name="correo" required><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>

        <label>Carrera:</label>
        <input type="text" name="carrera" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('alumnos.index') }}">← Volver al listado</a>
</body>
</html>
