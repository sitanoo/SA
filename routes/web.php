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
Route::get('/cronometragem', 'CronometragemController@index')->name("cronometragem.index");
Route::get('/produto', 'ProdutoController@index')->name("produto.index");
Route::get('/operacao', 'OperacaoController@index')->name("operacao.index");
Route::get('/usuario', 'UsuarioController@index')->name("usuario.index");
Route::get('/tomadaTempo', 'TomadaTempoController@index');
Route::get('/sequencia', 'SequenciaController@index')->name("sequencia.index");

//CRUDS
Route::resource('operacao', 'OperacaoController');
Route::resource('usuario', 'UsuarioController');
Route::resource('sequencia', 'SequenciaController');
Route::resource('tomadatempo', 'TomadaTempoController');
Route::resource('produto', 'ProdutoController');
