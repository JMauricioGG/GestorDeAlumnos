<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    // Mostrar todas las tareas
    public function index()
    {
        $tareas = Tarea::all(); // Todos pueden ver todas las tareas
        return view('tareas.index', compact('tareas'));
    }

    // Formulario para crear tarea
    public function create()
    {
        return view('tareas.create');
    }

    // Guardar nueva tarea
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|string',
            'fecha_entrega' => 'nullable|date',
        ]);

        Tarea::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'fecha_entrega' => $request->fecha_entrega,
            'user_id' => auth()->id(), // Asignamos la tarea al usuario logueado
        ]);

        return redirect()->route('tareas.index')->with('success', 'Tarea creada correctamente.');
    }

    // Mostrar una tarea
    public function show(Tarea $tarea)
    {
        return view('tareas.show', compact('tarea'));
    }

    // Formulario para editar tarea
    public function edit(Tarea $tarea)
    {
        if ($tarea->user_id !== auth()->id()) {
            abort(403); // Solo el dueño puede editar
        }
        return view('tareas.edit', compact('tarea'));
    }

    // Actualizar tarea
    public function update(Request $request, Tarea $tarea)
    {
        if ($tarea->user_id !== auth()->id()) {
            abort(403); // Solo el dueño puede actualizar
        }

        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable|string',
            'fecha_entrega' => 'nullable|date',
        ]);

        $tarea->update($request->all());
        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada correctamente.');
    }

    // Eliminar tarea
    public function destroy(Tarea $tarea)
    {
        if ($tarea->user_id !== auth()->id()) {
            abort(403); // Solo el dueño puede eliminar
        }

        $tarea->delete();
        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada correctamente.');
    }
}
