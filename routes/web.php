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
Route::get('/', function () {
  return view('reverso');
});
Route::get('/welcome', function(){
  return view('welcome');
});
Route::get('/registro', function(){
  return view('registro');
});
Route::get('/login', function(){
  return view('login');
});

//Rutas para el login
Route::post('/validar-registro',[LoginController::class,'register'])->
    name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->
    name('inicia-sesion');
Route::post('/logout',[LoginController::class,'logout'])->
    name('logout');
