<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLibroRequest;
use App\Models\Libro;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

// El Controlador encargado del registro y listado de libros //
class LibroController extends Controller
{
    // Muestra el formulario y la tabla con todos los libros //
    public function index(): View
    {
        // Consulta con Eloquent los más recientes primero //
        $libros = Libro::latest()->get();

        // Envía la colección a la vista libros/index.blade.php //
        return view('libros.index', compact('libros'));
    }

    //valida y guarda un nuevo libro //
    public function store(StoreLibroRequest $request): RedirectResponse
    {
        // Devuelve solo los campos que pasaron la validación //
        $libro = Libro::create($request->validated());

        // Redirige al listado //
        return redirect()
            ->route('libros.index')
            ->with('exito',"El libro \"{$libro->titulo}\" se ha registrado, ¡lo lograste! ¡Eres el éxito!");
    }
}
