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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback/', 'Auth\LoginController@handleProviderCallback');

















Route::resource('administrador/usuarios', 'Administrador\UsuariosController');
Route::resource('administrador/alumnos', 'Administrador\AlumnosController');
Route::resource('administrador/tutores', 'Administrador\TutoresController');
Route::resource('administrador/grupos', 'Administrador\GruposController');
Route::resource('administrador/carreras', 'Administrador\CarrerasController');
Route::resource('administrador/preguntas', 'Administrador\PreguntasController');
Route::resource('administrador/respuestas', 'Administrador\RespuestasController');
Route::resource('administrador/ejercicios', 'Administrador\EjerciciosController');


