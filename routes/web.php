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

Route::get('/todo', [
	'uses' => 'ToDoController@index',
	'as' => 'todo' 
]);

Route::post('/create/todo', [
	'uses' => 'ToDoController@store' 
]);

Route::get('/delete/todo/{id}', [
	'uses' => 'ToDoController@delete',
	'as' => 'todo.delete' 
]);

Route::get('/updateview/todo/{id}', [
	'uses' => 'ToDoController@updateview',
	'as' => 'todo.updateview' 
]);

Route::post('/update/todo/{id}', [
	'uses' => 'ToDoController@update',
	'as' => 'todo.update' 
]);

Route::get('/completed/todo/{id}', [
	'uses' => 'ToDoController@completed',
	'as' => 'todo.completed' 
]);
