<?php

namespace App\Repositories;

interface ProdutoRepositoryInterface
{
    /**
     * Recebe um produto por ID
     *
     * @param int
     */
    public function get($produto_id);

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
    public function delete($produto_id);

    /**
     * Updates a produto.
     *
     * @param int
     * @param array
     */
    public function update($produto_id, array $produto_data);
}