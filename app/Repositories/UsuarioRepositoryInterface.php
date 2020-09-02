<?php

namespace App\Repositories;

interface UsuarioRepositoryInterface
{
    /**
     * Recebe um produto por ID
     *
     * @param int
     */
    public function get($id);

    /**
     * Recebe todos os produtos.
     *
     * @return mixed
     */
    public function all();

    /**
     * Deleta um produto.
     *
     * @param int
     */
    public function delete($id);

    /**
     * Updates a produto.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data);
}