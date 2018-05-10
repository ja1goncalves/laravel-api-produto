<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function (){
    Route::post('marcas', 'MarcasController@store');
    Route::post('produtos', 'ProdutosController@store');

    Route::put('marcas/{id}', 'MarcasController@update');
    Route::put('produtos/{id}', 'ProdutosController@update');

    Route::delete('marcas/{id}', 'MarcasController@destroy');
    Route::delete('produtos/{id}', 'ProdutosController@destroy');
});

Route::get('marcas', 'MarcasController@index');
Route::get('produtos', 'ProdutosController@index');

Route::get('marcas/{id}', 'MarcasController@show');
Route::get('produtos/{id}', 'ProdutosController@show');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
