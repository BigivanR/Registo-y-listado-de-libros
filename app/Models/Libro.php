<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Modelo Eloquent que representa la tabla libros //
class Libro extends Model
{
    // Campos permitidos en la asignación masiva //
    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion',
    ];

    // Conversión automática de tipos al leer desde la base de datos //
    protected $casts = [
        'anio_publicacion' => 'integer',
    ];
}
