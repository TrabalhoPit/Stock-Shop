<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest
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
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
             'name.required' => 'O campo "Nome" é obrigatório.',
             'email.required' => 'O campo "Email" é obrigatório.',
             'password.required' => 'O campo "Senha" é obrigatório.',
             'type.required' => 'O campo "Tipo de usuario" é obrigatório.'
        ];
    }
}
