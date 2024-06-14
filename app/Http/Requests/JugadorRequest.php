<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRequest extends FormRequest
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
            'nombre' => ['required',],
            'apellido'=>['required',],
            'nickname'=>['required',],
            'rut'=>['required',],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es requerido',
            'apellido.required' => 'El apellido es requerido',
            'nickname.required' => 'El nickname es requerido',
            'rut.required' => 'el rut es requerida',
        ];
    }
}
