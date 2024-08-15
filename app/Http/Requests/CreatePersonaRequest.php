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

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $rules = [
            'cPerApellido' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'dPerFechaNac' => 'required',
            'nPerEdad' => 'required',
            'cPerSexo' => 'required',
            'nPerSueldo' => 'required',
            'cPerEstado' => 'required',
        ];

        if ($this->isMethod('post')) {

            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        } else {

            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages()
    {
        return [
            'cPerApellido.required' => 'Se necesita un Apellido para el registro',
            'cPerNombre.required' => 'Se necesita un Nombre para el registro',
            'cPerDireccion.required' => 'Se necesita una Dirección para el registro',
            'dPerFechaNac.required' => 'Se necesita una Fecha de Nacimiento para el registro',
            'nPerEdad.required' => 'Se necesita una Edad para el registro',
            'cPerSexo.required' => 'Se necesita un Sexo para el registro',
            'nPerSueldo.required' => 'Se necesita un Sueldo para el registro',
            'cPerEstado.required' => 'Se necesita un Estado para el registro',
            'image.required' => 'Se necesita una imagen para el registro',
            'image.image' => 'El archivo debe ser una imagen',
            'image.mimes' => 'La imagen debe ser de tipo: jpeg, png, jpg, gif, svg',
            'image.max' => 'La imagen no debe ser mayor a 2MB',
        ];
    }
}
