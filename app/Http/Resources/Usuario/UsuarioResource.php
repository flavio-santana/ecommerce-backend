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
            'origem'          => $this->origem,
            'enderecos'       => $this->enderecos->count() > 0 ? $this->enderecos->count() : 'Este usuário não possui endereços',
            'ativo'           => $this->ativo,

            'ref1' => [
                'href'  => route('usuarios.index'),
            ],

            'ref2' => [
                'href'  => route('usuario.enderecos', $this->id),
            ],

        ];
    }
}
