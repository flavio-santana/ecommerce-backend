<?php

namespace App\Repositories;

interface LinhaRepositoryInterface
{
    /**
     * Recebe um produto por ID
     *
     * @param int
     */
    public function get($linha_id);

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
    public function delete($linha_id);

    /**
     * Updates a produto.
     *
     * @param int
     * @param array
     */
    public function update($linha_id, array $linha_data);
}