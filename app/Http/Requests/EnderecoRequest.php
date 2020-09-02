<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * EnderecoRequest
 */
class EnderecoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'usuario_id'  => 'required|integer',
            'logradouro'  => 'required|string|max:100',
            'cep'         => 'required|string|max:10',
            'bairro'      => 'required|string|max:100',
            'cidade'      => 'required|string|max:100',
            'uf'          => 'required|string|max:2',
            'ativo'       => 'required',
        ];
    }
    
    /**
     * messages
     *
     * @return void
     */
    public function messages()
    {
        return [
            'usuario_id.required' => 'Usuario ID é obrigatório!',
            'logradouro.required' => 'Logradouro é obrigatório!',
            'cep.required'        => 'CEP é obrigatório',
            'bairro.required'     => 'Bairro é obrigatório',
            'uf.required'         => 'UF é obrigatório',
            'ativo.required'      => 'Ativo é obrigatório',
        ];
    }
}
