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
     * paginate
     *
     * @param  mixed $take
     * @return void
     */
    public function paginate($take=0)
    {
        return Produto::paginate($take);
    }
    
    /**
     * exibirNaLoja
     *
     * @param  mixed $opcao
     * @return void
     */
    public function exibirNaLoja(String $opcao)
    {
        return Produto::where('ativo','=',$opcao)->get();
    }

       
    /**
     * freteGratis
     *
     * @param  mixed $opcao
     * @return void
     */
    public function freteGratis(String $opcao)
    {
        return Produto::where('frete_gratis','=',$opcao)->get();
    }
            
    /**
     * lancamento
     *
     * @return void
     */
    public function lancamento()
    {
        return Produto::where('lancamento','=','Sim')
        ->select('id','sku', 'nome', 'descricao')
        ->get();
    }
    
    /**
     * destaque
     *
     * @return void
     */
    public function destaque()
    {
        return Produto::where('destaque','=','sim')
        ->select('id','sku', 'nome', 'descricao')
        ->get();
    }

}