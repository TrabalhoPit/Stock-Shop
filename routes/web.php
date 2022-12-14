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
require_once('login/web.php');
require_once('cadastro/web.php');
require_once('my-account/web.php');
require_once('produto/web.php');
Route::get('/', "App\Http\Controllers\HomeController@index")->name('home');