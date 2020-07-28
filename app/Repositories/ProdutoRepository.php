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
    public function get($id)
    {
        return Produto::find($id);
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
    public function delete($id)
    {
        $answer=Produto::destroy($id); 

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
    public function update($id, array $data)
    {
        Produto::find($id)->update($data);
    }
    
    /**
     * 
     */
    public function paginate($take=0)
    {
        return Produto::paginate($take);
    }

    public function exibirNaLoja(String $opcao)
    {
        return Produto::where('exibir_na_loja','=',$opcao)->get();
    }

    /**
     * 
     */
    public function freteGratis(String $opcao)
    {
        return Produto::where('frete_gratis','=',$opcao)->get();
    }

}