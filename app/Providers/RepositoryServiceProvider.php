<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
        $this->app->bind(
            'App\Repositories\PromocaoRepositoryInterface',
            'App\Repositories\PromocaoRepository'
        );

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

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}