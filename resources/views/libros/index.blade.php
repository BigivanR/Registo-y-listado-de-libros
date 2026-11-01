{{-- Vista principal que hereda el layout y une formulario, listado y la bibliotecaria --}}
@extends('layouts.app')

@section('titulo', 'Libros')

@section('contenido')
    {{-- Mensaje de éxito (con un GIF) --}}
    @if (session('exito'))
        <x-alerta tipo="exito" class="alerta-con-imagen">
            <img src="{{ asset('img/conserje.gif') }}" alt="Conserje de Enchufe.tv" onerror="this.remove()">
            <span>{{ session('exito') }}</span>
        </x-alerta>
    @endif

    {{-- Aviso general cuando la validación falla --}}
    @if ($errors->any())
        <x-alerta tipo="error">Por estas cosas el champú (sí, champú como suena, no juzgue) trae indicaciones. Revise antes de darle a guardar.</x-alerta>
    @endif

    {{-- Diseño en columnas: formulario, tabla y GIF decorativo --}}
    <div class="columnas">
        @include('libros.formulario')
        @include('libros.tabla')
        <img class="bibliotecaria" src="{{ asset('img/bibliotecaria.gif') }}" alt="Bibliotecaria" onerror="this.remove()">
    </div>
@endsection
