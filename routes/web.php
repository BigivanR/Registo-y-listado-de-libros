<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

// La raíz del sitio redirige directamente al módulo de libros//
Route::redirect('/', '/libros');

// Rutas del módulo de libros, agrupadas por controlador//
Route::controller(LibroController::class)->group(function () {
    Route::get('/libros', 'index')->name('libros.index');   // Formulario + listado //
    Route::post('/libros', 'store')->name('libros.store');  // Guardar nuevo libro //
});
