<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => ['required', 'min:3', 'max:40'],
            'descripcion' => ['string'],
        ];
    }

    public function messages(): array
    {
        return[
            'nombre.required'=> 'Indique nombre del Equipo',
            'nombre.min'=> 'Ingrese mínimo 3 letras',
            'nombre.max'=> 'Ingrese máximo 40 letras',
        ];
    }
}
