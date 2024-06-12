<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
<<<<<<< Updated upstream
            'nombre' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
=======
        'nombre' => ['required', 'string'],
        'descripcion' => ['required', 'string'],
>>>>>>> Stashed changes
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del equipo es requerido',
            'descripcion.required' => 'La descripción del equipo es requerida',
        ];
    }
}
