Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');
//http://127.0.0.1:8000/produtos

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@precoMinimo');
//http://127.0.0.1:8000/produtos?preco_minimo=12