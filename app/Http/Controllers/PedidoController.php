<?php

namespace App\Http\Controllers;

use App\Model\Pedido;
use App\Model\ItemPedidos;
use Illuminate\Http\Request;
use App\Http\Resources\Pedido\PedidoCollection;
use App\Http\Resources\Pedido\PedidoResource;
use App\Repositories\PedidoRepository;
use App\Http\Resources\ItemPedidos\ItemPedidosCollection;

/**
 * PedidoController
 */
class PedidoController extends Controller
{

    protected $pedido;

    /**
     * __construct
     *
     * @param  mixed $pedido
     * @return void
     */
    public function __construct(PedidoRepository $pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return PedidoCollection::collection($this->pedido->all());
        //return PedidoResource::collection($this->pedido->all());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
        return new PedidoResource($this->pedido->get($pedido->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
    
    /**
     * pedidoItens
     *
     * @param  mixed $pedido
     * @return void
     */
    public function itemPedidos(Pedido $pedido)
    {
        //
        return response()->json(ItemPedidosCollection::collection($pedido->itens));
    }
}