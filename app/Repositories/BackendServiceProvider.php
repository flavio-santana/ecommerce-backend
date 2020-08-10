<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
       
        $this->app->bind(
            'App\Repositories\CupomRepositoryInterface',
            'App\Repositories\CupomRepository'
        );

        $this->app->bind(
            'App\Repositories\PedidoRepositoryInterface',
            'App\Repositories\PedidoRepository'
        );

        $this->app->bind(
            'App\Repositories\EnderecoRepositoryInterface',
            'App\Repositories\EnderecoRepository'
        );
       
        $this->app->bind(
            'App\Repositories\LinhaRepositoryInterface',
            'App\Repositories\LinhaRepository'
        );

        $this->app->bind(
            'App\Repositories\PaginaRepositoryInterface',
            'App\Repositories\PaginaRepository'
        );

        $this->app->bind(
            'App\Repositories\ProdutoRepositoryInterface',
            'App\Repositories\ProdutoRepository'
        );

        $this->app->bind(
            'App\Repositories\TipoCabeloRepositoryInterface',
            'App\Repositories\TipoCabeloRepository'
        );

        $this->app->bind(
            'App\Repositories\UsuarioRepositoryInterface',
            'App\Repositories\UsuarioRepository'
        );
    }
}