<?php

namespace App\Http\Controllers;

use App\Model\Cliente;
use Illuminate\Http\Request;
use App\Http\Resources\Cliente\ClienteCollection;
use App\Http\Resources\Cliente\ClienteResource;
use App\Repositories\ClienteRepository;
use App\Http\Resources\Endereco\EnderecoCollection;

class ClienteController extends Controller
{

    protected $cliente;

    /**
     * ProdutoController constructor
     * 
     * @param ProdutoRepository $produto
     */
    public function __construct(ClienteRepository $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ClienteCollection::collection($this->cliente->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return response()->json($this->cliente->save($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
        return new ClienteResource($this->cliente->get($cliente->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
        return response()->json($this->cliente->update($cliente->id, $request)); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
        $data = $this->cliente->delete($cliente->id); 
        
        return response()->json($data);
    }

    /**
     * clienteEnderecos
     *
     * @return void
     */
    public function clienteEndereco(Cliente $cliente)
    {
        //return response()->json($cliente->enderecos);
            
    }
}
