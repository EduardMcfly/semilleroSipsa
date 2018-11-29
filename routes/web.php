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

Route::get('/formularioAsqueroso', 'PruebaControlador@index');
Route::post('/cualQuierMierda', 'PruebaControlador@create')->name('Hola');
Route::get('/id/{id}', 'PruebaControlador@destroy')->name('borrar');
