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

Route::get('/entradaperiodo', function () {
    return view('entradaPeriodo');
});

Route::get('/listarperiodos', function () {
    return view('listarPeriodos');
});

Route::any('periodos/store','PeriodoController@store')->name('periodos.store');


