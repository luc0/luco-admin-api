<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email,' . $this->route('id'),
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'email.unique' => 'El email ya esta registrado',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email es inválido',
        ];
    }
}
