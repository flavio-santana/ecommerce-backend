<?php

namespace App\Http\Resources\Cliente;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ClienteCollection extends ResourceCollection
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
                'href'  => route('clientes.show', $this->id),
            ],
        ];
    }
}
