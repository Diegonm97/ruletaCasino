<?php

use App\jugadores;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadoresController;
use Illuminate\Http\Request;

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

Route::get('/', function () {

    return JugadoresController::index();
   
});

Route::resource('jugadores', 'jugadoresController');

Route::post('/', "JugadoresController@index")->name('jugar');

Route::get('/destroy/{id}', "JugadoresController@destroy")->name('destroy');

