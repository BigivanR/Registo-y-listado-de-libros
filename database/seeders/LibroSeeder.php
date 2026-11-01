<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

// Seeder opcional con libros de ejemplo //
class LibroSeeder extends Seeder
{
    public function run(): void
    {
        $libros = [
            ['titulo' => 'Pepe y los frijoles mágicos',          'autor' => 'El Vago de la esquina',   'anio_publicacion' => 2019],
            ['titulo' => 'Cómo sobrevivir al lunes sin café',    'autor' => 'Don Chepe Desvelado',     'anio_publicacion' => 2021],
            ['titulo' => 'El misterio de la pupusa perdida',     'autor' => 'La Niña Tencha',          'anio_publicacion' => 2008],
        ];

        // Recorre el arreglo y crea cada registro con Eloquent //
        foreach ($libros as $libro) {
            Libro::create($libro);
        }
    }
}
