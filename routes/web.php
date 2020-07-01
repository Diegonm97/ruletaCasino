<?php

use App\jugadores;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadoresController;
use Illuminate\Http\Request;

Route::get('/', function () {

    return JugadoresController::index();
   
});

Route::resource('jugadores', 'jugadoresController');

Route::post('/', "JugadoresController@index")->name('jugar');

Route::get('/destroy/{id}', "JugadoresController@destroy")->name('destroy');

