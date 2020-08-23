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
Route::get('/contatos', 'ContatosController@index');
Route::get('/contatos/novo', 'ContatosController@create');
Route::get('/contatos/aula', 'ContatosController@aula');
Route::get('/aula2', 'ContatosController@cad_aula');
Route::post('/contatos/lista', 'ContatosController@store');
Route::get('/contatos/edit/{id}', 'ContatosController@edit');
Route::put('/contatos/{id}/update', 'ContatosController@update');
Route::get('/contatos/delete/{id}', 'ContatosController@delete');