<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migración esta define la estructura de la tabla libros en MySQL //
return new class extends Migration
{
    // Se ejecuta con php artisan migrate y crea la tabla //
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();                                     // Llave primaria autoincrementa //
            $table->string('titulo', 150);                    // Título del libro (texto) //
            $table->string('autor', 100);                     // Autor del libro (texto) //
            $table->unsignedSmallInteger('anio_publicacion');  // Año de publicación (4 dígitos) //
            $table->timestamps();                             // Creado y actualizado //
        });
    }

    // Se ejecuta con php artisan migrate:rollback y elimina la tabla //
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
