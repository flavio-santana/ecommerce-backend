<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Authentication APIs for Login, Register, User Profile, Token Refresh and Logout.
Route::post('/auth/register','AuthController@register');
//
Route::post('/auth/login','AuthController@login');

// ROUTE GROUP
Route::group(['middleware' => ['jwt.auth']], function () {
    
    //
    Route::get('/auth/logout','AuthController@logout');
    //
    Route::get('/auth/user-profile','AuthController@userProfile');
    //
    Route::post('/auth/refresh','AuthController@refresh');

    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/clientes','ClienteController');
    //Route::apiResource('/usuarios','UsuarioController')->middleware('jwt.auth');
    //
    Route::get('/clientes/{cliente}/enderecos', 'ClienteController@clienteEndereco')->name('cliente.enderecos');

});

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/produtos','ProdutoController');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/produtos/exibir-na-loja/{opcao}','ProdutoController@exibirNaLoja');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/produtos/frete-gratis/{opcao}','ProdutoController@freteGratis');
//
Route::get('/lancamentos/produtos', 'ProdutoController@produtoLancamentos')->name('produto.lancamentos');
//
Route::get('/produtos-em-destaque', 'ProdutoController@produtoDestaque');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/tipos-cabelos','TipoCabeloController');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/tipos-cabelos/exibir-na-loja/{opcao}','TipoCabeloController@exibirNaLoja');
// Retorna todas os produtos recomendadas para um tipo de cabelo
Route::get('/tipos-cabelos/{tipos_cabelo}/produtos-recomendados', 'TipoCabeloController@produtosRecomendados')->name('produtos.recomendados');


// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/linhas','LinhaController');
// Retorna todos os produtos relacionados a uma linha
Route::get('/linhas/{linha}/produtos', 'LinhaController@linhaProdutos')->name('linha.produtos');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/linhas/exibir-na-loja/{opcao}','LinhaController@exibirNaLoja');


// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/enderecos','EnderecoController');


// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/variacoes','VariacaoController');
//
Route::get('/produtos/{produto}/variacoes', 'VariacaoController@variacaoProduto')->name('variacao.produto');


// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/pedidos','PedidoController');
//
Route::get('/pedidos/{pedido}/itens', 'PedidoController@itemPedidos')->name('item.pedidos');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/cupons','CupomController');

/*
Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('/cupons', 'CupomController', array('only' => array('index', 'store', 'show', 'update', 'destroy')));
    Route::resource('users', 'UsersController');
    
    // Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
    Route::apiResource('/cupons','CupomController');

});
*/

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/promocoes','PromocaoController');
//
Route::get('/promocoes/ativas/{opcao}', 'PromocaoController@promocaoAtiva')->name('promocoes.ativas');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/forma-pagamentos','FormaPagamentoController');
