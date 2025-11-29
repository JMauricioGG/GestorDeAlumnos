<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\SeccionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumnos', AlumnoController::class);

Route::resource('tareas', TareaController::class);

Route::resource('secciones', SeccionController::class);


Route::post('secciones/{seccion}/alumnos', [SeccionController::class, 'storeAlumno'])->name('secciones.alumnos.store');