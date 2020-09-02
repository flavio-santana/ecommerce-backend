<?php

namespace App\Repositories;

use App\Validation\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Model\Endereco;
use App\Http\Requests\EnderecoRequest;


/**
 * 
 */
class EnderecoRepository implements UsuarioRepositoryInterface
{
    
    /**
     * Recebe uma linha por seu ID
     *
     * @param int
     * @return collection
     */
    public function get($id)
    {
        return Endereco::find($id);
    }   
    
    /**
     * Recebe todos as linhas.
     *
     * @return mixed
     */
    public function all()
    {
        return Endereco::all();
    }

    /**
     * Deleta uma linha
     *
     * @param int
     */
    public function delete($id)
    {
        $answer=Endereco::destroy($id); 

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
    public function update($id, $json)
    {
        // json to array
        $data = [
            
            'logradouro' => $json->{'logradouro'},

            'complemento' => $json->{'complemento'},
            
            'cep' => $json->{'cep'},
            
            'bairro' => $json->{'bairro'},
            
            'cidade' => $json->{'cidade'},
            
            'uf' => $json->{'uf'},
            
            'ativo' => $json->{'ativo'},

        ];
        
        $EnderecoRequest = new EnderecoRequest;

        //
        //$teste = Validator::make($data, $EnderecoRequest->rules());

        //
        $endereco = Endereco::find($id)->update($data);

        if ($endereco){
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

            'usuario_id' => $json->{'usuario_id'},

            'logradouro' => $json->{'logradouro'},
            
            'complemento' => $json->{'complemento'},
            
            'cep' => $json->{'cep'},
            
            'bairro' => $json->{'bairro'},
            
            'cidade' => $json->{'cidade'},
            
            'uf' => $json->{'uf'},

            'ativo' => $json->{'ativo'},

        ];

        $user = Endereco::create($data);

        if ($user){
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
     * 
     */
    public function paginate($take=0)
    {
        return Endereco::paginate($take);
    }

}