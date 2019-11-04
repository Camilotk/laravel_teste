<?php

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
    return "Rotas: /video /categoria";
});

Route::resource('video', 'VideoController')->except('show');
Route::resource('categoria', 'CategoriaController')->except('show');