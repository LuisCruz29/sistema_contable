<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
			'permiso_id' => 'required',
			'nombreEmpleado' => 'required|string',
			'apellidoEmpleado' => 'required|string',
			'telefono' => 'required|string',
			'user' => 'required|string',
            'password'=>'required|string',
        ];
    }
}
