<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\EntrevistasController;
use App\Http\Controllers\GeneradorController;
use App\Http\Controllers\GerenciasController;
use App\Models\Entrevista;
use Illuminate\Support\Facades\Auth;
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
/** home */
Route::get('/', function () {
    return view('home');
})->name("home")->middleware('auth');

/** Rutas entrevistas */
Route::get('entrevista-nueva',[EntrevistasController::class,'id_prospecto'])->name("entrevista-nueva")->middleware('auth');

Route::get('entrevistas-listado',[EntrevistasController::class,'get_entrevistas'])->name("entrevistas-listado")->middleware('auth');

Route::get('busqueda-entrevistas',[EntrevistasController::class,'busqueda_entrevistas'])->name("busqueda-entrevistas")->middleware('auth');

Route::post('nueva_entrevista',[EntrevistasController::class,'nueva_entrevista'])->name("nueva_entrevista")->middleware('auth');

Route::post('entrevista-estado',[EntrevistasController::class,'cambiarEstadoEntrevista'])->name('estavista-estado')->middleware('auth');

/** Rutas prospecto */
Route::get('prospecto-nuevo', function () {
    return view('prospecto-nuevo');
})->name("prospecto-nuevo")->middleware('auth');

Route::get('prospecto-editar', function () {
    return view('prospecto-editar');
})->name("prospecto-editar")->middleware('auth');

Route::get('prospecto-listado', function () {
    return view('prospecto-listado');
})->name("prospecto-listado")->middleware('auth');

Route::get('imprimir-prospecto/{nombrePdfProspecto}/{id}/{email?}',[GeneradorController::class,'imprimirProspecto'])->name("imprimir-prospecto")->middleware('auth');

Route::get('download-pdf/{pdf}',[GeneradorController::class,'downloadPdf'])->name("download-pdf")->middleware("auth");

/** Rutas gerencias */
Route::post('nueva-gerencia',[GerenciasController::class,'nueva_gerencia'])->name("nueva-gerencia")->middleware('auth');

Route::post('edit-gerencia',[GerenciasController::class,'edit_gerencia'])->name("edit-gerencia")->middleware('auth');

Route::post('edit-estado-gerencia',[GerenciasController::class,'edit_estado_gerencia'])->name("edit-estado-gerencia")->middleware('auth');

Route::get('gerencia-listado',[GerenciasController::class,'listado_gerencia'])->name("gerencia-listado")->middleware('auth');

Route::get('eliminar-gerencia/{id}',[GerenciasController::class,'eliminar_gerencia'])->name("eliminar-gerencia")->middleware('auth');

/** Rutas usuarios */
Route::get('perfil-listado', function () {
    return view('perfil-listado');
})->name("perfil-listado")->middleware('auth');

Route::get('parametros-acuerdos', function () {
    return view('parametros-certificado');
})->name("parametros-certificado")->middleware('auth');

Route::get('voucher', function () {
    return view('voucher');
})->name("voucher")->middleware('auth');

Route::get('perfil-editar', function () {
    return view('perfil-editar');
})->name("perfil-editar")->middleware('auth');

Route::get('perfil-nuevo', function () {
    return view('perfil-nuevo');
})->name("perfil-nuevo")->middleware('auth');

Route::post('/login',[ApiController::class, 'queryApi'])->name('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
