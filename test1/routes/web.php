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

//especificado que solo recibira numero como parametros
Route::get('fotografia/{numero?}', function ($numero = 'sin_numero') {
    return 'Estas en la galeria de fotos: '. $numero;
})->where('numero', '[0-9]+');

//Otra manera de de generar rutas ..
//primero nombre de la ruta, y despues nombre del archivo sin ext.
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::view('/fotos', 'fotos', ['num' => 125]);