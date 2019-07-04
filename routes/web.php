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
    return view('welcome');
});

Auth::routes();
//Me configura el archivo de rutas para el CRUD de nota. nota es el apellido y me referencia el controlador que me las va a manejar 
Route::resource('/notas','NotaController');
Route::get('/home', 'HomeController@index')->name('home');
