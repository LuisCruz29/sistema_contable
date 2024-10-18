<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblPermisoRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'rol' => 'required|string',
			'ingresarRegistroDiario' => 'required|boolean',
			'consultarRegistroDiario' => 'required|boolean',
			'consultarCuentasT' => 'required|boolean',
			'consultarEstadosFinancieros' => 'required|boolean',
			'crearUsuarios' => 'required|boolean',
			'gestionarPermisos' => 'required|boolean',
        ];
    }
}
