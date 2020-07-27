<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/linhas','LinhaController');

Route::apiResource('/produtos','ProdutoController');

Route::apiResource('/paginas','PaginaController');

Route::get('/linhas/{linha}/produtos', 'ProdutoController@produtos')->name('produtos');

