<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//  Concentra las reglas de validación del formulario de libros //
class StoreLibroRequest extends FormRequest
{
    // Cualquiera puede registrar libros (no hay login aún) //
    public function authorize(): bool
    {
        return true;
    }

    // Reglas que se deben cumplir para los datos antes de guardarse //
    public function rules(): array
    {
        return [
            'titulo'           => ['required', 'string', 'min:2', 'max:150'],
            'autor'            => ['required', 'string', 'min:3', 'max:100'],
            // Obliga a 4 dígitos exactos, max evita años en el futuro //
            'anio_publicacion' => ['required', 'integer', 'digits:4', 'min:1000', 'max:' . date('Y')],
        ];
    }

    // Mensajes de error//
    public function messages(): array
    {
        return [
            'required' => 'El campo :attribute es obligatorio, llénelo, no lo piense más.',
            'min'      => 'El campo :attribute debe tener al menos :min caracteres.',
            'max'      => 'El campo :attribute no puede superar :max caracteres.',
            'anio_publicacion.integer' => 'El año de la publicación debe ser numérico.',
            'anio_publicacion.digits'  => 'El año de la publicación debe tener solo 4 dígitos (No exagere :v).',
            'anio_publicacion.min'     => 'El año de la publicación no puede ser menor a 1000 (lo siento, pero así es).',
            'anio_publicacion.max'     => 'El año de la publicación no puede ser mayor al año actual (:max) (No exagere :v).',
        ];
    }

    // Nombres legibles de los campos para los mensajes de error //
    public function attributes(): array
    {
        return [
            'titulo'           => 'título',
            'autor'            => 'autor',
            'anio_publicacion' => 'año de la publicación',
        ];
    }
}
