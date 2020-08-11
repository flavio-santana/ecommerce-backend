<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Promocao;

/**
 * CupomRepository
 */
class PromocaoRepository implements PromocaoRepositoryInterface
{
        
    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    public function get($id)
    {
        return Promocao::find($id);
    }   
        
    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        return Promocao::all();
    }
    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        
        $data = Promocao::join('item_pedidos', 'promocaos.id','=','item_pedidos.promocao_id')
            ->where('promocaos.id',$id)
            ->select('promocaos.id', 'promocaos.produto_id', 'promocaos.preco_promocional', 
            'promocaos.data_inicio', 'promocaos.data_termino', 'promocaos.ativo')
            ->get();

           
        if($data->count() > 0){
            $data=[
                'status'=>'0',
                'msg'=>'Essa registro não pode ser excluído, porque já está vinculada a um pedido!'
            ];
        }else{

            $promocao = Promocao::destroy($id);
            
            $data=[
                'status'=>'1',
                'msg'=>'Registro excluído com sucesso!'
            ];
        }
        

        return $data;
    }
    
    /**
     * update
     *
     * @param  mixed $id
     * @param  mixed $json
     * @return void
     */
    public function update($id, $json)
    {
        // json to array
        $data = [
            
            'produto_id' => $json->{'produto_id'},

            'preco_promocional' => $json->{'preco_promocional'},
        
            'data_inicio' => $json->{'data_inicio'},
        
            'data_termino' => $json->{'data_termino'},
        
            'ativo' => $json->{'ativo'},
        
        ];
        
        //
        $promocao = Promocao::find($id)->update($data);

        if ($promocao){
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
     * save
     *
     * @param  mixed $json
     * @return void
     */
    public function save($json)
    {

       // json to array
       $data = [
            
            'produto_id' => $json->{'produto_id'},

            'preco_promocional' => $json->{'preco_promocional'},
            
            'data_inicio' => $json->{'data_inicio'},
            
            'data_termino' => $json->{'data_termino'},
            
            'ativo' => $json->{'ativo'},
            
        ];

        //
        $promocao = Promocao::create($data);

        if ($promocao){
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
     * paginate
     *
     * @param  mixed $take
     * @return void
     */
    public function paginate($take=0)
    {
        return Promocao::paginate($take);
    }
    
    /**
     * promocaoAtiva
     *
     * @return void
     */
    public function promocaoAtiva(String $opcao)
    {
        return Promocao::where('ativo','=',$opcao)->get();
    }

}