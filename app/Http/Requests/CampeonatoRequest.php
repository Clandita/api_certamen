<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampeonatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'alpha', 'min:3', 'max:40'],
            'juego' => ['required','string','min:3'],
            'reglas' => ['string',],
            'premios' => ['string']
        ];
    }

    public function messages(): array
    {
        return[
            'nombre.required'=> 'Indique nombre del campeonato',
            'nombre.alpha' => 'Ingrese solo Letras',
            'nombre.min'=> 'Ingrese mínimo 3 letras',
            'nombre.max'=> 'Ingrese máximo 40 letras',
        ];
    }
}
