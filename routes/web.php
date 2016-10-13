<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


use App\Cita;

Route::get('/', function () {
    return view('welcome');
});

/*
 * Rutas para el Login
 */

/*
Route::get('/autenticacion-usuarios', ['uses' => 'Illuminate\Foundation\Auth@showLoginForm',
                        'as' => 'login']);
*/


Auth::routes();

Route::get('/home', 'HomeController@index');


/** Rutas de Citas **/

Route::get('/citas', 'CitasController@index');

Route::get('/citas/{id}', function (){
    return "Cita";
})->where('id', '[0-9]+');

Route::get('/Faker', function()
{
    return View('clinica.faker');
});

