<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampeonatoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|alpha|min:3|max:40',
            'juego' => 'required|string|min:3',
            'reglas' => 'required|string',
            'premios' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'=> 'Indique nombre del campeonato',
            'nombre.alpha' => 'Ingrese solo Letras',
            'nombre.min'=> 'Ingrese mínimo 3 letras',
            'nombre.max'=> 'Ingrese máximo 40 letras',
            'juego.required' => 'Indique el juego',
            'juego.string' => 'Ingrese un nombre válido para el juego',
            'juego.min' => 'Ingrese mínimo 3 letras para el juego',
            'reglas.required' => 'Indique las reglas',
            'reglas.string' => 'Ingrese reglas válidas',
            'premios.required' => 'Indique los premios',
            'premios.string' => 'Ingrese premios válidos',
        ];
    }
}
