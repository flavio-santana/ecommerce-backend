<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Model\Cliente;

/**
 * 
 */
class ClienteRepository implements ClienteRepositoryInterface
{
    
    /**
     * Recebe uma linha por seu ID
     *
     * @param int
     * @return collection
     */
    public function get($id)
    {
        return Cliente::find($id);
    }   
    
    /**
     * Recebe todos as linhas.
     *
     * @return mixed
     */
    public function all()
    {
        return Cliente::all();
    }

    /**
     * Deleta uma linha
     *
     * @param int
     */
    public function delete($id)
    {
        $return=Cliente::destroy($id); 

        if ($return){
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
            'nome' => $json->{'nome'},

            'data_nascimento' => $json->{'data_nascimento'},
            
            'cpf' => $json->{'cpf'},
            
            'email' => $json->{'email'},
            
            'telefone' => $json->{'telefone'},
            
            'whatsapp' => $json->{'whatsapp'},
            
            'genero' => $json->{'genero'},

            'origem' => $json->{'origem'},

            'ativo' => $json->{'ativo'}
        ];
        
        //
        $return=Cliente::find($id)->update($data);

        if ($return){
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

            'nome' => $json->{'nome'},

            'data_nascimento' => $json->{'data_nascimento'},
            
            'cpf' => $json->{'cpf'},
            
            'email' => $json->{'email'},
            
            'telefone' => $json->{'telefone'},
            
            'whatsapp' => $json->{'whatsapp'},
            
            'genero' => $json->{'genero'},

            'endereco' => $json->{'endereco'},

            'complemento' => $json->{'complemento'},
            
            'bairro' => $json->{'bairro'},
            
            'cep' => $json->{'cep'},

            'cidade' => $json->{'cidade'},
            
            'uf' => $json->{'uf'},

            'origem' => $json->{'origem'},

            'publicado' => $json->{'publicado'}
        ];

        $return=Cliente::create($data);

        if ($return){
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
        return Cliente::paginate($take);
    }

}