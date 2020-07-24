<?php

namespace App\Http\Controllers;

use App\Model\Produto;
use Illuminate\Http\Request;

use App\Repositories\ProdutoRepository;

use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class ProdutoController extends Controller
{

    protected $produto;

    /**
     * ProdutoController constructor
     * 
     * @param ProdutoRepository $produto
     */
    public function __construct(ProdutoRepository $produto)
    {
        $this->produto = $produto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json($this->produto->all());

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
     * @param  \App\Model\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    //public function show(Produto $produto)
    public function show(Produto $produto)
    {

        //
        return response()->json($this->produto->get($produto->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {

        //
        $data = $this->produto->destroy($produto->id); 
        
        return response()->json($data);
    }
}
