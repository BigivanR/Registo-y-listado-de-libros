{{-- Vista parcial de la tabla con todos los libros registrados --}}
<section class="tarjeta">
    <h2>
        Libros registrados
        {{-- Total de libros registrados --}}
        <span class="contador">{{ $libros->count() }}</span>
    </h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Registrado</th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse recorre la colección; @empty se muestra si no hay registros --}}
            @forelse ($libros as $libro)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $libro->titulo }}</strong></td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->anio_publicacion }}</td>
                    {{-- diffForHumans() muestra "hace 2 minutos", etc. --}}
                    <td>{{ $libro->created_at->locale('es')->diffForHumans() }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="vacio">Aún no hay libros registrados. ¡Agrega el primero!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
