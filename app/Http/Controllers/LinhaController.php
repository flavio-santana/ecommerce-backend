<?php

namespace App\Http\Controllers;

use App\Model\Linha;
use Illuminate\Http\Request;
use App\Repositories\LinhaRepository;
use App\Http\Resources\Linha\LinhaResource;
use App\Http\Resources\Linha\LinhaCollection; 

class LinhaController extends Controller
{

    protected $linha;

    /**
     * ProdutoController constructor
     * 
     * @param ProdutoRepository $produto
     */
    public function __construct(LinhaRepository $linha)
    {
        $this->linha = $linha;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return LinhaCollection::collection($this->linha->all());
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
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function show(Linha $linha)
    {
        //
        return new LinhaResource($this->linha->get($linha->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function edit(Linha $linha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linha $linha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Linha  $linha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linha $linha)
    {
        //
    }
}
