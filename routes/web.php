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
Route::get('/', function(){
  return view('login');
});
Route::view('/welcome',"welcome")->middleware('auth')->name('welcome');
Route::view('/turnos',"turnos")->middleware('auth')->name('turnos');
Route::view('/5-7',"5-7")->middleware('auth')->name('5-7');
Route::view('/6-8',"6-8")->middleware('auth')->name('6-8');


//Rutas para el login
Route::view('/login',"login")->name('login');
Route::view('/registro',"registro")->name('registro');
Route::post('/validar-registro',[LoginController::class,'register'])->
    name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->
    name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->
    name('logout');
