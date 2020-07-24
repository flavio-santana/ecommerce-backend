<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Produto;

/**
 * 
 */
class ProdutoRepository implements ProdutoRepositoryInterface
{
    
    /**
     * Recebe um produto por seu ID
     *
     * @param int
     * @return collection
     */
    public function get($produto_id)
    {
        return Produto::find($produto_id);
    }   
    
    /**
     * Recebe todos os produtos.
     *
     * @return mixed
     */
    public function all()
    {
        return Produto::all();
    }

    /**
     * Deletes a produto.
     *
     * @param int
     */
    public function delete($produto_id)
    {
        $answer=Produto::destroy($produto_id); 

        if ($answer){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'
            ];
        } 
        
        return $data;
    }

    /**
     * Updates um produto.
     *
     * @param int
     * @param array
     */
    public function update($produto_id, array $produto_data)
    {
        Produto::find($produto_id)->update($produto_data);
    }
    
}