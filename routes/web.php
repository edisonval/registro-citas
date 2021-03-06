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

Route::middleware(['auth', 'admin'])->namespace('Admin')->group(function () {

    // rutas especialidades

Route::get('/Especialidad', 'EspecialidadesController@index');
Route::get('/Especialidad/create', 'EspecialidadesController@create');
Route::get('/Especialidad/{especialidades}/edit', 'EspecialidadesController@edit');

Route::post('/Especialidad', 'EspecialidadesController@store');
Route::put('/Especialidad/{especialidades}', 'EspecialidadesController@update');
Route::delete('/Especialidad/{especialidades}', 'EspecialidadesController@destroy');

// rutas Medicos

route::resource('Medico', 'MedicosController');

// rutas pacientes

route::resource('Paciente', 'PacientesController');
  
});

Route::middleware(['auth', 'medico'])->namespace('Medico')->group(function () {

    Route::get('/calendario', 'CalendarioController@edit');
    Route::post('/calendario', 'CalendarioController@store');

});






