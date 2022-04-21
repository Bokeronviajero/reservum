<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodoController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('bienvenido');
}); 

Route::get('/hola', function () {
    return "Hola Mundo";
});

Route::get('/listarperiodos', function () {
    return view('periodos.listarPeriodos');
});



Route::get('/periodos/', [PeriodoController::class, 'index']);
Route::get('/periodos/create',[PeriodoController::class, 'create'])->name('periodos.create');
Route::post('/periodos/store',[PeriodoController::class, 'store'])->name('periodos.store');

