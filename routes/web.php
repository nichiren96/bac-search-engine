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

Route::get('/dashboard', 'BackController@index');
Route::get('/majors', 'MajorController@add');

Route::get('/stats', 'StatController@add');
Route::match(['get', 'post'], '/majors/{id}', 'MajorController@edit');
Route::match(['get', 'post'], '/stats/{id}', 'StatController@edit');

Route::post('/majors', 'MajorController@store');
Route::post('/stats', 'StatController@store');

Route::get('/', 'HomeController@index');
Route::get('/students', 'StudentController@find');


