<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/produto/cadastro', "App\Http\Controllers\ProdutoController@create")->name('produto.create');
Route::post('/produto/create', "App\Http\Controllers\ProdutoController@criarProduto")->name('produto.criarproduto');
Route::get('/produto/detalhe/{id}', "App\Http\Controllers\ProdutoController@getProductById")->name('produto.getById');
