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

Route::get('/login', "App\Http\Controllers\LoginController@index")->name('login.signin');
Route::get('/disconnect', "App\Http\Controllers\LoginController@disconnectUser")->name('login.disconnect');
Route::post('/login/validate', "App\Http\Controllers\LoginController@validateUser")->name('login.validate');
