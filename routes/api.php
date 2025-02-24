<?php

use Illuminate\Support\Facades\Route;

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');
