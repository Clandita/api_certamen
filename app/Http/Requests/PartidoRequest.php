<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'hora' => ['required',],
            'jugado'=>['required',],
            'lugar'=>['required',],
            'campeonato_id'=>['required',],
        ];
    }

    public function messages()
    {
        return [
            'hora.required' => 'La hora es requerido',
            'jugado.required' => 'El Jugado es requerido',
            'lugar.required' => 'El lugar es requerido',
            'campeonato_id.required' => 'el campeonato es requerido',
        ];
    }
}
