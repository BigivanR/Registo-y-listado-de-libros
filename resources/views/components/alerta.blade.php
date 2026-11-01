{{-- Componente reutilizable de alerta: <x-alerta tipo="exito">Mensaje</x-alerta> --}}
@props(['tipo' => 'exito'])

<div {{ $attributes->merge(['class' => "alerta alerta-{$tipo}"]) }} role="alert">
    {{ $slot }}
</div>
