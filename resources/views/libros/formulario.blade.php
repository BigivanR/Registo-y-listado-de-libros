{{-- Vista parcial del formulario para registrar un libro --}}
<section class="tarjeta">
    <h2>Registrar nuevo libro</h2>

    {{-- Envía los datos por POST a la ruta libros.store --}}
    <form action="{{ route('libros.store') }}" method="POST" novalidate>
        {{-- Token obligatorio de Laravel contra ataques CSRF --}}
        @csrf

        {{-- Reutiliza el componente x-campo para cada dato --}}
        <div class="fila">
            <x-campo nombre="titulo" etiqueta="Título" maxlength="150" placeholder="Pepe y los frijoles mágicos" />
            <x-campo nombre="autor" etiqueta="Autor" maxlength="100" placeholder="El Vago de la esquina" />
            <x-campo nombre="anio_publicacion" etiqueta="Año de publicación" tipo="number"
                     min="1000" max="{{ date('Y') }}" placeholder="En números, por favor, no letras" />
        </div>

        <button type="submit">Guardar libro</button>
    </form>
</section>
