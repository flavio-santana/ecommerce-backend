<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/produtos','ProdutoController');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/produtos/exibir-na-loja/{opcao}','ProdutoController@exibirNaLoja');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/produtos/frete-gratis/{opcao}','ProdutoController@freteGratis');
//
Route::get('/produtos/{produto}/variacoes', 'ProdutoController@produtoVariacoes')->name('produto.variacoes');

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
Route::apiResource('/usuarios','UsuarioController');
//
Route::get('/usuarios/{usuario}/enderecos', 'UsuarioController@usuarioEnderecos')->name('usuario.enderecos');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/enderecos','EnderecoController');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/variacoes','VariacaoController');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/pedidos','PedidoController');
//
Route::get('/pedidos/{pedido}/itens', 'PedidoController@itemPedidos')->name('item.pedidos');

// Aqui, temos encapsulado os métodos index(get), store(post), show(get), update(put) e destroy(delete)
Route::apiResource('/cupons','CupomController');