<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPasswordUserRequest extends FormRequest
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
            "oldPassword" => "required",
            'newPassword' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'oldPassword.required' => 'O campo "Senha Antiga" é obrigatório.',
            'newPassword.required' => 'O campo "Senha Nova" é obrigatório.'
        ];
    }
}
