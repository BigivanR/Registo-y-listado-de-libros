{{-- Componente de campo etiqueta mas input y mensaje de error --}}
@props(['nombre', 'etiqueta', 'tipo' => 'text'])

<div>
    <label for="{{ $nombre }}">{{ $etiqueta }}</label>

    {{-- old() conserva lo escrito si la validación falla --}}
    <input
        type="{{ $tipo }}"
        id="{{ $nombre }}"
        name="{{ $nombre }}"
        value="{{ old($nombre) }}"
        {{ $attributes->class(['invalido' => $errors->has($nombre)]) }}
    >

    {{-- Muestra el error de validación de este campo, si existe --}}
    @error($nombre)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
