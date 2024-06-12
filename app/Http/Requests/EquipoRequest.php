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
<<<<<<< HEAD
            'nombre' => ['required', 'string'],
            'descripcion' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del equipo es requerido',
            'descripcion.required' => 'La descripción del equipo es requerida',
=======
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
>>>>>>> 4ce663312248f19916ede80347d4301870e3fc57
        ];
    }
}
