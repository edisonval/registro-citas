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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// rutas especialidades

Route::get('/Especialidad', 'EspecialidadesController@index');
Route::get('/Especialidad/create', 'EspecialidadesController@create');
Route::get('/Especialidad/{Especialidades}/edit', 'EspecialidadesController@edit');

Route::post('/Especialidad', 'EspecialidadesController@store');
