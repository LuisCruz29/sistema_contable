<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TblRegistroDiarioRequest extends FormRequest
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
			'codigoTransaccion' => 'required',
			'cuenta_id' => 'required',
			'user_id' => 'required',
			'debe' => 'required',
			'haber' => 'required',
			'descripcion' => 'required|string',
			'fecha' => 'required',
        ];
    }
}
