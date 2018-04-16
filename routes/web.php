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

Route::get('/', 'TodoController@index');

Route::post('/todo/create', 'TodoController@store');

Route::get('/todo/edit/{id}', [
    'uses' => 'TodoController@edit',
    'as' => 'todo.edit'
]);

Route::post('/todo/update/{id}', [
    'uses' => 'TodoController@update',
    'as' => 'todo.update'
]);

Route::get('/todo/delete/{id}', [
    'uses' => 'TodoController@destroy',
    'as' => 'todo.delete'
]);

Route::get('/todo/completed/{id}', [
    'uses' => 'TodoController@completed',
    'as' => 'todo.completed'
]);