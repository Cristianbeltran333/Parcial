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

Route::get('/dependencia', 'DependenciaController@index');
Route::get('/sucursal', 'SucursalController@index');
Route::get('/impresora', 'ImpresoraController@index');
