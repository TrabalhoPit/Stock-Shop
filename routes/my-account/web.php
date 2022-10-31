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

Route::get('/minha-conta', "App\Http\Controllers\MyAccount\MyAccountController@index")->name('myAccount.details');
Route::get('/editar-conta', "App\Http\Controllers\MyAccount\EditController@index")->name('myAccount.edit');
Route::get('/editar-senha', "App\Http\Controllers\MyAccount\EditPasswordController@index")->name('myAccount.edit.password');

Route::post('/usuario/editar/senha', "App\Http\Controllers\MyAccount\EditPasswordController@update")->name('edit.password');
