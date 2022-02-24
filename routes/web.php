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

Route::get('/hola', function () {
    return "Hola Mundo";
});

Route::get('/entradareserva', function () {
    return view('entradaReserva');
});

Route::get('/crear', function () {
    return view('reservas.crear');
});

Route::any('reservas/store','ReservaController@store')->name('reservas.store');

