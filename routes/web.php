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

Route::get('/', 'IndexController@index');
Route::get('/produto', 'ProdutoController@index');
Route::get('/operacao', 'OperacaoController@index');
Route::get('/usuario', 'UsuarioController@index');
Route::get('/tomadaTempo', 'TomadaTempoController@index');
Route::get('/sequencia', 'SequenciaController@index');

//CRUDS
Route::resource('operacao', 'OperacaoController');
Route::resource('usuario', 'UsuarioController');
Route::resource('sequencia', 'SequenciaController');
Route::resource('tomada-tempo', 'TomadaTempoController');
Route::resource('produto', 'ProdutoController');
