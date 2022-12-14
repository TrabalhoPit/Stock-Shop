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

Route::get('/cadastro', "App\Http\Controllers\CadastroController@cadastro")->name("signup");
Route::post('/cadastro/criar', "App\Http\Controllers\CadastroController@CriarUsuario");
Route::post('/usuario/editar', "App\Http\Controllers\CadastroController@editUser");
