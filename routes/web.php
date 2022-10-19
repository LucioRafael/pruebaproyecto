<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
//Rutas de navegacion(rutas protegidas)
Route::get('/reverso', function () {
  return view('reverso');
});

Route::view('/welcome',"welcome")->middleware('auth')->name('welcome');
Route::view('/turnos',"login.turnos")->middleware('auth')->name('turnos');

//Rutas de los turnos
Route::middleware(['auth'])->group(function () {
Route::resource('Turno57','App\Http\Controllers\Turno57Controller');    
Route::resource('Turno68','App\Http\Controllers\Turno68Controller');  
});

//Rutas para el login
Route::view('/',"login.login")->name('login');
Route::view('/registro',"login.registro")->name('registro');
Route::post('/validar-registro',[LoginController::class,'register'])->
    name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->
    name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->
    name('logout');

//Rutas de hojas de chequeo 5-7
Route::view('/f7_setcs_ele_cr_l1_01',"welcome")->middleware('auth')->name('f7_setcs_ele_cr_l1_01');
Route::view('/f7_setcs_ele_20_l1_01',"welcome2")->middleware('auth')->name('f7_setcs_ele_20_l1_01');

//Rutas de hojas de chequeo 6-8
