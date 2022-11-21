<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'marca' => 'required',
            'category' => 'required',
            'image' => '',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'seller_id' => ''
        ];
    }

    public function messages()
    {
        return [
             'name.required' => 'O campo "Nome" é obrigatório.',
             'marca.required' => 'O campo "Marca" é obrigatório.',
             'category.required' => 'O campo "Categoria" é obrigatório.',
             'description.required' => 'O campo "Descrição" é obrigatório.',
             'quantity.required' => 'O campo "Quantidade" é obrigatório.',
             'price.required' => 'O campo "Preço" é obrigatório.'
        ];
    }
}
