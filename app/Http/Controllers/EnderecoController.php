<?php

namespace App\Http\Controllers;

use App\Model\Endereco;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Repositories\EnderecoRepository;
use App\Http\Resources\Endereco\EnderecoCollection;
use App\Http\Resources\Endereco\EnderecoResource;

/**
 * EnderecoController
 */
class EnderecoController extends Controller
{

    protected $endereco;

    /**
     * __construct
     *
     * @param  mixed $endereco
     * @return void
     */
    public function __construct(EnderecoRepository $endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return EnderecoCollection::collection($this->endereco->all());
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
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show(Endereco $endereco)
    {
        //
        return new EnderecoResource($this->endereco->get($endereco->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function edit(Endereco $endereco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Endereco $endereco)
    {
        //
        return response()->json($this->endereco->update($endereco->id, $request)); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endereco $endereco)
    {
        //
    }

}
