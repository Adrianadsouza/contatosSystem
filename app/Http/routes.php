<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ContatoController@index');


Route::get('contato/list', 'ContatoController@index');
Route::get('contato/add', 'ContatoController@add');

Route::get('contato/delete/{id}', 'ContatoController@delete');
Route::get('contato/edit/{id}', 'ContatoController@edit');
