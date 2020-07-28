<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//
Route::apiResource('/produtos','ProdutoController');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/produtos/exibir-na-loja/{opcao}','ProdutoController@exibirNaLoja');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/produtos/frete-gratis/{opcao}','ProdutoController@freteGratis');

//
Route::apiResource('/tipos-cabelos','TipoCabeloController');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/tipos-cabelos/exibir-na-loja/{opcao}','TipoCabeloController@exibirNaLoja');
// Retorna todas as linhas recomendadas para um tipo de cabelo
Route::get('/tipos-cabelos/{tipos_cabelo}/linhas-recomendadas', 'LinhaController@linhasRecomendadas')->name('linhas-recomendadas');

//
Route::apiResource('/linhas','LinhaController');
// Retorna todos os produtos relacionados a uma linha
Route::get('/linhas/{linha}/produtos', 'ProdutoController@produtosRelacionados')->name('produtos-relacionados');
// Retorna uma lista de produtos, conforme o valor(sim, nao) passado. 
Route::get('/linhas/exibir-na-loja/{opcao}','LinhaController@exibirNaLoja');