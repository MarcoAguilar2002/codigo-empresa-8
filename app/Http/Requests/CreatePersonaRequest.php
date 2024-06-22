<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            
                'cPerApellido' => 'required',
                'cPerNombre' => 'required',
                'cPerDireccion' => 'required',
                'dPerFechaNac' => 'required',
                'nPerEdad' => 'required',
                'cPerSexo' => 'required',
                'nPerSueldo' => 'required',
                'cPerEstado' => 'required',
            
        ];
    }

    public function messages(){
        return[
            'cPerApellido.required' => 'Se necesita un Apellido para el registro',
            'cPerNombre.required' => 'Se necesita un Nombre para el registro',
            'cPerDireccion.required' => 'Se necesita una Direccion para el registro',
            'dPerFechaNac.required' => 'Se necesita una Fecha de Nacimiento para el registro',
            'nPerEdad.required' => 'Se necesita una Edad para el registro',
            'cPerSexo.required' => 'Se necesita un Sexo para el registro',
            'nPerSueldo.required' => 'Se necesita un Sueldo para el registro',
            'cPerEstado.required' => 'Se necesita un Estado para el registro',
        ];
    }
}
