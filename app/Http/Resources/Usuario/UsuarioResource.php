<?php

namespace App\Http\Resources\Usuario;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'              => $this->id,
            'nome'            => $this->nome,
            'data_nascimento' => $this->data_nascimento,
            'cpf'             => $this->cpf,
            'email'           => $this->email,
            'telefone'        => $this->telefone,
            'whatsapp'        => $this->whatsapp,
            'genero'          => $this->genero,
            'endereco'        => $this->endereco,
            'complemento'     => $this->complemento,
            'bairro'          => $this->bairro,
            'cep'             => $this->cep,
            'cidade'          => $this->cidade,
            'uf'              => $this->uf,
            'origem'          => $this->origem,
            'publicado'       => $this->publicado,

            'ref1' => [
                'href'  => route('usuarios.index'),
            ],

        ];
    }
}
