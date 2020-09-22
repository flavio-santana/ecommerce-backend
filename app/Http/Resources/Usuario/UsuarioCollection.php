<?php

namespace App\Http\Resources\Usuario;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'nome'      => $this->nome,
            'email'     => $this->email,
            'telefone'  => $this->telefone,
            'enderecos' => $this->enderecos->count() > 0 ? $this->enderecos->count() : 'Este usuário não possui endereços',
            'ref1' => [
                'href'  => route('usuarios.show', $this->id),
            ],
        ];
    }
}