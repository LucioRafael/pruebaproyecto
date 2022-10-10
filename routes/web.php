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
//Rutas de navegacion
Route::get('/reverso', function () {
  return view('reverso');
});
Route::get('/', function(){
  return view('login');
});
Route::view('/welcome',"welcome")->middleware('auth')->name('welcome');
Route::view('/login',"login")->name('login');
Route::view('/registro',"registro")->name('registro');
//Rutas para el login
Route::post('/validar-registro',[LoginController::class,'register'])->
    name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->
    name('inicia-sesion');
Route::post('/logout',[LoginController::class,'logout'])->
    name('logout');
