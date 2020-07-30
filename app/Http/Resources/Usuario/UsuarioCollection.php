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
            'nome'     => $this->nome,
            'email'    => $this->email,
            'telefone' => $this->telefone,
            'cidade'   => $this->cidade,
            'uf'       => $this->uf,

            'ref1' => [
                'href'  => route('usuarios.show', $this->id),
            ],

            'ref2' => [
                'href'  => route('usuario.enderecos', $this->id),
            ],

        ];
    }
}