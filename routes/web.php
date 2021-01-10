<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\EntrevistasController;
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
/** Rutas entrevistas */
Route::get('entrevista-nueva', function () {
    return view('entrevistas-nueva');
})->middleware('auth');;
Route::get('entrevistas-listado', function () {
    return view('entrevistas-listado');
})->middleware('auth');
Route::post('nueva_entrevista',[EntrevistasController::class,'nueva_entrevista'])->name("nueva_entrevista");

/** Rutas prospecto */
Route::get('prospecto-nuevo', function () {
    return view('prospecto-nuevo');
})->middleware('auth');;
Route::get('prospecto-editar', function () {
    return view('prospecto-editar');
})->middleware('auth');;
Route::get('prospecto-listado', function () {
    return view('prospecto-listado');
})->middleware('auth');;

/** Rutas usuarios */
Route::get('perfil-listado', function () {
    return view('perfil-listado');
})->middleware('auth');;
Route::get('perfil-editar', function () {
    return view('perfil-editar');
})->middleware('auth');;
Route::get('gerencia-listado', function () {
    return view('gerencia-listado');
})->middleware('auth');;
Route::post('/login',[ApiController::class, 'queryApi'])->name('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
