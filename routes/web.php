<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'getuser']);

// Ruta donde se realiza el CRUD de las encuestas
//Route::resource('encuesta','EncuestaController', ['except' => 'show','edit','create']);

Route::get('/tareas', 'EncuestaController@index');

Route::put('/tareas/actualizar', 'EncuestaController@update');

Route::post('/tareas/guardar', 'EncuestaController@store');

Route::delete('/tareas/borrar/{id}', 'EncuestaController@destroy');

Route::get('/tareas/buscar', 'EncuestaController@show');

Route::post('/resp/guardar', 'OpcionController@store');
