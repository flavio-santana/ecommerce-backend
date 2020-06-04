<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/produtos','ProdutoController');

Route::apiResource('/paginas','PaginaController');