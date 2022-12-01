<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatoshojaController;
use App\Http\Controllers\ReversoController00;
use App\Http\Controllers\Reversosetcs20Controller;
use App\Http\Controllers\Reversosetcs201Controller;
use App\Http\Controllers\Datoshojasetcs20Controller;
use App\Http\Controllers\Datoshojasetcs201Controller;
use App\Http\Controllers\Reversosetcs2031Controller;
use App\Http\Controllers\Datoshojasetcs2031Controller;
use App\Http\Controllers\Reversosetcs40111Controller;
use App\Http\Controllers\Datoshojasetcs40111Controller;
use App\Http\Controllers\Reversosetcs40112Controller;
use App\Http\Controllers\Datoshojasetcs40112Controller;
use App\Http\Controllers\Reversosetcs40113Controller;
use App\Http\Controllers\Datoshojasetcs40113Controller;
use App\Http\Controllers\Reversosetcs40114Controller;
use App\Http\Controllers\Datoshojasetcs40114Controller;
use App\Http\Controllers\Reversosetcs40115Controller;
use App\Http\Controllers\Datoshojasetcs40115Controller;
use App\Http\Controllers\Reversosetcs40211Controller;
use App\Http\Controllers\Datoshojasetcs40211Controller;
use App\Http\Controllers\Reversosetcs40212Controller;
use App\Http\Controllers\Datoshojasetcs40212Controller;
use App\Http\Controllers\Reversosetcs40213Controller;
use App\Http\Controllers\Datoshojasetcs40213Controller;
use App\Http\Controllers\Reversosetcs40214Controller;
use App\Http\Controllers\Datoshojasetcs40214Controller;
use App\Http\Controllers\Reversosetcs40215Controller;
use App\Http\Controllers\Datoshojasetcs40215Controller;
use App\Http\Controllers\Reversosetcs606111Controller;
use App\Http\Controllers\Datoshojasetcs606111Controller;
use App\Http\Controllers\Reversosetcs606121Controller;
use App\Http\Controllers\Datoshojasetcs606121Controller;
use App\Http\Controllers\Reversosetcs606211Controller;
use App\Http\Controllers\Datoshojasetcs606211Controller;
use App\Http\Controllers\Reversosetcs606221Controller;
use App\Http\Controllers\Datoshojasetcs606221Controller;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
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
Route::resource('Turno1','App\Http\Controllers\Turno57Controller');    
Route::resource('Turno2','App\Http\Controllers\Turno68Controller');  
Route::resource('Turno3','App\Http\Controllers\Turno3Controller'); 
});

//Rutas de hojas de chequeo 1
Route::middleware(['auth',])->group(function () {
//Rutas F7-SETCS-ELE-CR-L1-01
Route::resource('F7-SETCS-ELE-CR-L1-01-57', 'App\Http\Controllers\DatoshojaController');
Route::resource('reverso', 'App\Http\Controllers\ReversoController00');
Route::get('/check',[DatoshojaController::class,'check'])->name('check');
Route::put('/finalcheck/{id}',[DatoshojaController::class,'finalcheck'])->name('finalcheck');
Route::get('/edit2/{id}',[DatoshojaController::class,'edit2'])->name('edit2');
Route::put('/update2/{id}',[DatoshojaController::class,'update2'])->name('update2');
Route::get('/pdfprint',[DatoshojaController::class,'pdfprint'])->name('pdfprint');
Route::get('/printindex',[DatoshojaController::class,'printindex'])->name('printindex');
Route::get('/printreverso',[ReversoController00::class,'printreverso'])->name('printreverso');
Route::get('/pdfprintReversoF7SETCSELECRL1011',[ReversoController00::class,'pdfprintReversoF7SETCSELECRL1011'])->name('pdfprintReversoF7SETCSELECRL1011');
//Rutas F7-SETCS-ELE-20-L1-01-1
Route::resource('F7-SETCS-ELE-20-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs20Controller');
Route::resource('reversoSETCS20', 'App\Http\Controllers\Reversosetcs20Controller');
Route::get('/checkSETCS20',[Datoshojasetcs20Controller::class,'check'])->name('checkSETCS20');
Route::put('/finalcheckSETCS20/{id}',[Datoshojasetcs20Controller::class,'finalcheck'])->name('finalcheckSETCS20');
Route::get('/edit2SETCS20/{id}',[Datoshojasetcs20Controller::class,'edit2'])->name('edit2SETCS20');
Route::put('/update2SETCS20/{id}',[Datoshojasetcs20Controller::class,'update2'])->name('update2SETCS20');
Route::get('/pdfprintSETCS20',[Datoshojasetcs20Controller::class,'pdfprint'])->name('pdfprintSETCS20');
Route::get('/printindexSETCS20',[Datoshojasetcs20Controller::class,'printindex'])->name('printindexSETCS20');
Route::get('/printreversoSETCS20',[Reversosetcs20Controller::class,'printreverso'])->name('printreversoSETCS20');
Route::get('/pdfReversoSETCS20',[Reversosetcs20Controller::class,'pdfReverso'])->name('pdfReversoSETCS20');
//Rutas F7-SETCS-ELE-20-L1-01-2
Route::resource('F7-SETCS-ELE-20-L1-01-1-2', 'App\Http\Controllers\Datoshojasetcs201Controller');
Route::resource('reversoSETCS201', 'App\Http\Controllers\Reversosetcs201Controller');
Route::get('/checkSETCS201',[Datoshojasetcs201Controller::class,'check'])->name('checkSETCS201');
Route::put('/finalcheckSETCS201/{id}',[Datoshojasetcs201Controller::class,'finalcheck'])->name('finalcheckSETCS201');
Route::get('/edit2SETCS201/{id}',[Datoshojasetcs201Controller::class,'edit2'])->name('edit2SETCS201');
Route::put('/update2SETCS201/{id}',[Datoshojasetcs201Controller::class,'update2'])->name('update2SETCS201');
Route::get('/pdfprintSETCS201',[Datoshojasetcs201Controller::class,'pdfprint'])->name('pdfprintSETCS201');
Route::get('/printindexSETCS201',[Datoshojasetcs201Controller::class,'printindex'])->name('printindexSETCS201');
Route::get('/printreversoSETCS201',[Reversosetcs201Controller::class,'printreverso'])->name('printreversoSETCS201');
Route::get('/pdfReversoSETCS201',[Reversosetcs201Controller::class,'pdfReverso'])->name('pdfReversoSETCS201');
//Rutas F7-SETCS-ELE-20-L1-03
Route::resource('F7-SETCS-ELE-20-L1-03-1', 'App\Http\Controllers\Datoshojasetcs2031Controller');
Route::resource('reversoSETCS2031', 'App\Http\Controllers\Reversosetcs2031Controller');
Route::get('/checkSETCS2031',[Datoshojasetcs2031Controller::class,'check'])->name('checkSETCS2031');
Route::put('/finalcheckSETCS2031/{id}',[Datoshojasetcs2031Controller::class,'finalcheck'])->name('finalcheckSETCS2031');
Route::get('/edit2SETCS2031/{id}',[Datoshojasetcs2031Controller::class,'edit2'])->name('edit2SETCS2031');
Route::put('/update2SETCS2031/{id}',[Datoshojasetcs2031Controller::class,'update2'])->name('update2SETCS2031');
Route::get('/pdfprintSETCS2031',[Datoshojasetcs2031Controller::class,'pdfprint'])->name('pdfprintSETCS2031');
Route::get('/printindexSETCS2031',[Datoshojasetcs2031Controller::class,'printindex'])->name('printindexSETCS2031');
Route::get('/printreversoSETCS2031',[Reversosetcs2031Controller::class,'printreverso'])->name('printreversoSETCS2031');
Route::get('/pdfReversoSETCS2031',[Reversosetcs2031Controller::class,'pdfReverso'])->name('pdfReversoSETCS2031');
//Rutas F7-SETCS-ELE-40-L1-01-1
Route::resource('F7-SETCS-ELE-40-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs40111Controller');
Route::resource('reversoSETCS40111', 'App\Http\Controllers\Reversosetcs40111Controller');
Route::get('/checkSETCS40111',[Datoshojasetcs40111Controller::class,'check'])->name('checkSETCS40111');
Route::put('/finalcheckSETCS40111/{id}',[Datoshojasetcs40111Controller::class,'finalcheck'])->name('finalcheckSETCS40111');
Route::get('/edit2SETCS40111/{id}',[Datoshojasetcs40111Controller::class,'edit2'])->name('edit2SETCS40111');
Route::put('/update2SETCS40111/{id}',[Datoshojasetcs40111Controller::class,'update2'])->name('update2SETCS40111');
Route::get('/pdfprintSETCS40111',[Datoshojasetcs40111Controller::class,'pdfprint'])->name('pdfprintSETCS40111');
Route::get('/printindexSETCS40111',[Datoshojasetcs40111Controller::class,'printindex'])->name('printindexSETCS40111');
Route::get('/printreversoSETCS40111',[Reversosetcs40111Controller::class,'printreverso'])->name('printreversoSETCS40111');
Route::get('/pdfReversoSETCS40111',[Reversosetcs40111Controller::class,'pdfReverso'])->name('pdfReversoSETCS40111');
//Rutas F7-SETCS-ELE-40-L1-01-2
Route::resource('F7-SETCS-ELE-40-L1-01-1-2', 'App\Http\Controllers\Datoshojasetcs40112Controller');
Route::resource('reversoSETCS40112', 'App\Http\Controllers\Reversosetcs40112Controller');
Route::get('/checkSETCS40112',[Datoshojasetcs40112Controller::class,'check'])->name('checkSETCS40112');
Route::put('/finalcheckSETCS40112/{id}',[Datoshojasetcs40112Controller::class,'finalcheck'])->name('finalcheckSETCS40112');
Route::get('/edit2SETCS40112/{id}',[Datoshojasetcs40112Controller::class,'edit2'])->name('edit2SETCS40112');
Route::put('/update2SETCS40112/{id}',[Datoshojasetcs40112Controller::class,'update2'])->name('update2SETCS40112');
Route::get('/pdfprintSETCS40112',[Datoshojasetcs40112Controller::class,'pdfprint'])->name('pdfprintSETCS40112');
Route::get('/printindexSETCS40112',[Datoshojasetcs40112Controller::class,'printindex'])->name('printindexSETCS40112');
Route::get('/printreversoSETCS40112',[Reversosetcs40112Controller::class,'printreverso'])->name('printreversoSETCS40112');
Route::get('/pdfReversoSETCS40112',[Reversosetcs40112Controller::class,'pdfReverso'])->name('pdfReversoSETCS40112');
//Rutas F7-SETCS-ELE-40-L1-01-3
Route::resource('F7-SETCS-ELE-40-L1-01-1-3', 'App\Http\Controllers\Datoshojasetcs40113Controller');
Route::resource('reversoSETCS40113', 'App\Http\Controllers\Reversosetcs40113Controller');
Route::get('/checkSETCS40113',[Datoshojasetcs40113Controller::class,'check'])->name('checkSETCS40113');
Route::put('/finalcheckSETCS40113/{id}',[Datoshojasetcs40113Controller::class,'finalcheck'])->name('finalcheckSETCS40113');
Route::get('/edit2SETCS40113/{id}',[Datoshojasetcs40113Controller::class,'edit2'])->name('edit2SETCS40113');
Route::put('/update2SETCS40113/{id}',[Datoshojasetcs40113Controller::class,'update2'])->name('update2SETCS40113');
Route::get('/pdfprintSETCS40113',[Datoshojasetcs40113Controller::class,'pdfprint'])->name('pdfprintSETCS40113');
Route::get('/printindexSETCS40113',[Datoshojasetcs40113Controller::class,'printindex'])->name('printindexSETCS40113');
Route::get('/printreversoSETCS40113',[Reversosetcs40113Controller::class,'printreverso'])->name('printreversoSETCS40113');
Route::get('/pdfReversoSETCS40113',[Reversosetcs40113Controller::class,'pdfReverso'])->name('pdfReversoSETCS40113');
//Rutas F7-SETCS-ELE-40-L1-01-4
Route::resource('F7-SETCS-ELE-40-L1-01-1-4', 'App\Http\Controllers\Datoshojasetcs40114Controller');
Route::resource('reversoSETCS40114', 'App\Http\Controllers\Reversosetcs40114Controller');
Route::get('/checkSETCS40114',[Datoshojasetcs40114Controller::class,'check'])->name('checkSETCS40114');
Route::put('/finalcheckSETCS40114/{id}',[Datoshojasetcs40114Controller::class,'finalcheck'])->name('finalcheckSETCS40114');
Route::get('/edit2SETCS40114/{id}',[Datoshojasetcs40114Controller::class,'edit2'])->name('edit2SETCS40114');
Route::put('/update2SETCS40114/{id}',[Datoshojasetcs40114Controller::class,'update2'])->name('update2SETCS40114');
Route::get('/pdfprintSETCS40114',[Datoshojasetcs40114Controller::class,'pdfprint'])->name('pdfprintSETCS40114');
Route::get('/printindexSETCS40114',[Datoshojasetcs40114Controller::class,'printindex'])->name('printindexSETCS40114');
Route::get('/printreversoSETCS40114',[Reversosetcs40114Controller::class,'printreverso'])->name('printreversoSETCS40114');
Route::get('/pdfReversoSETCS40114',[Reversosetcs40114Controller::class,'pdfReverso'])->name('pdfReversoSETCS40114');
//Rutas F7-SETCS-ELE-40-L1-01-5
Route::resource('F7-SETCS-ELE-40-L1-01-1-5', 'App\Http\Controllers\Datoshojasetcs40114Controller');
Route::resource('reversoSETCS40115', 'App\Http\Controllers\Reversosetcs40114Controller');
Route::get('/checkSETCS40115',[Datoshojasetcs40115Controller::class,'check'])->name('checkSETCS40115');
Route::put('/finalcheckSETCS40115/{id}',[Datoshojasetcs40115Controller::class,'finalcheck'])->name('finalcheckSETCS40115');
Route::get('/edit2SETCS40115/{id}',[Datoshojasetcs40115Controller::class,'edit2'])->name('edit2SETCS40115');
Route::put('/update2SETCS40115/{id}',[Datoshojasetcs40115Controller::class,'update2'])->name('update2SETCS40115');
Route::get('/pdfprintSETCS40115',[Datoshojasetcs40115Controller::class,'pdfprint'])->name('pdfprintSETCS40115');
Route::get('/printindexSETCS40115',[Datoshojasetcs40115Controller::class,'printindex'])->name('printindexSETCS40115');
Route::get('/printreversoSETCS40115',[Reversosetcs40115Controller::class,'printreverso'])->name('printreversoSETCS40115');
Route::get('/pdfReversoSETCS40115',[Reversosetcs40115Controller::class,'pdfReverso'])->name('pdfReversoSETCS40115');
//Rutas F7-SETCS-ELE-40-L1-02-1
Route::resource('F7-SETCS-ELE-40-L1-02-1-1', 'App\Http\Controllers\Datoshojasetcs40211Controller');
Route::resource('reversoSETCS40211', 'App\Http\Controllers\Reversosetcs40211Controller');
Route::get('/checkSETCS40211',[Datoshojasetcs40211Controller::class,'check'])->name('checkSETCS40211');
Route::put('/finalcheckSETCS40211/{id}',[Datoshojasetcs40211Controller::class,'finalcheck'])->name('finalcheckSETCS40211');
Route::get('/edit2SETCS40211/{id}',[Datoshojasetcs40211Controller::class,'edit2'])->name('edit2SETCS40211');
Route::put('/update2SETCS40211/{id}',[Datoshojasetcs40211Controller::class,'update2'])->name('update2SETCS40211');
Route::get('/pdfprintSETCS40211',[Datoshojasetcs40211Controller::class,'pdfprint'])->name('pdfprintSETCS40211');
Route::get('/printindexSETCS40211',[Datoshojasetcs40211Controller::class,'printindex'])->name('printindexSETCS40211');
Route::get('/printreversoSETCS40211',[Reversosetcs40211Controller::class,'printreverso'])->name('printreversoSETCS40211');
Route::get('/pdfReversoSETCS40211',[Reversosetcs40211Controller::class,'pdfReverso'])->name('pdfReversoSETCS40211');
//Rutas F7-SETCS-ELE-40-L1-02-2
Route::resource('F7-SETCS-ELE-40-L1-02-1-2', 'App\Http\Controllers\Datoshojasetcs40212Controller');
Route::resource('reversoSETCS40212', 'App\Http\Controllers\Reversosetcs40212Controller');
Route::get('/checkSETCS40212',[Datoshojasetcs40212Controller::class,'check'])->name('checkSETCS40212');
Route::put('/finalcheckSETCS40212/{id}',[Datoshojasetcs40212Controller::class,'finalcheck'])->name('finalcheckSETCS40212');
Route::get('/edit2SETCS40212/{id}',[Datoshojasetcs40212Controller::class,'edit2'])->name('edit2SETCS40212');
Route::put('/update2SETCS40212/{id}',[Datoshojasetcs40212Controller::class,'update2'])->name('update2SETCS40212');
Route::get('/pdfprintSETCS40212',[Datoshojasetcs40212Controller::class,'pdfprint'])->name('pdfprintSETCS40212');
Route::get('/printindexSETCS40212',[Datoshojasetcs40212Controller::class,'printindex'])->name('printindexSETCS40212');
Route::get('/printreversoSETCS40212',[Reversosetcs40212Controller::class,'printreverso'])->name('printreversoSETCS40212');
Route::get('/pdfReversoSETCS40212',[Reversosetcs40212Controller::class,'pdfReverso'])->name('pdfReversoSETCS40212');
//Rutas F7-SETCS-ELE-40-L1-02-3
Route::resource('F7-SETCS-ELE-40-L1-02-1-3', 'App\Http\Controllers\Datoshojasetcs40213Controller');
Route::resource('reversoSETCS40213', 'App\Http\Controllers\Reversosetcs40213Controller');
Route::get('/checkSETCS40213',[Datoshojasetcs40213Controller::class,'check'])->name('checkSETCS40213');
Route::put('/finalcheckSETCS40213/{id}',[Datoshojasetcs40213Controller::class,'finalcheck'])->name('finalcheckSETCS40213');
Route::get('/edit2SETCS40213/{id}',[Datoshojasetcs40213Controller::class,'edit2'])->name('edit2SETCS40213');
Route::put('/update2SETCS40213/{id}',[Datoshojasetcs40213Controller::class,'update2'])->name('update2SETCS40213');
Route::get('/pdfprintSETCS40213',[Datoshojasetcs40213Controller::class,'pdfprint'])->name('pdfprintSETCS40213');
Route::get('/printindexSETCS40213',[Datoshojasetcs40213Controller::class,'printindex'])->name('printindexSETCS40213');
Route::get('/printreversoSETCS40213',[Reversosetcs40213Controller::class,'printreverso'])->name('printreversoSETCS40213');
Route::get('/pdfReversoSETCS40213',[Reversosetcs40213Controller::class,'pdfReverso'])->name('pdfReversoSETCS40213');
//Rutas F7-SETCS-ELE-40-L1-02-4
Route::resource('F7-SETCS-ELE-40-L1-02-1-4', 'App\Http\Controllers\Datoshojasetcs40214Controller');
Route::resource('reversoSETCS40214', 'App\Http\Controllers\Reversosetcs40214Controller');
Route::get('/checkSETCS40214',[Datoshojasetcs40214Controller::class,'check'])->name('checkSETCS40214');
Route::put('/finalcheckSETCS40214/{id}',[Datoshojasetcs40214Controller::class,'finalcheck'])->name('finalcheckSETCS40214');
Route::get('/edit2SETCS40214/{id}',[Datoshojasetcs40214Controller::class,'edit2'])->name('edit2SETCS40214');
Route::put('/update2SETCS40214/{id}',[Datoshojasetcs40214Controller::class,'update2'])->name('update2SETCS40214');
Route::get('/pdfprintSETCS40214',[Datoshojasetcs40214Controller::class,'pdfprint'])->name('pdfprintSETCS40214');
Route::get('/printindexSETCS40214',[Datoshojasetcs40214Controller::class,'printindex'])->name('printindexSETCS40214');
Route::get('/printreversoSETCS40214',[Reversosetcs40214Controller::class,'printreverso'])->name('printreversoSETCS40214');
Route::get('/pdfReversoSETCS40214',[Reversosetcs40214Controller::class,'pdfReverso'])->name('pdfReversoSETCS40214');
//Rutas F7-SETCS-ELE-40-L1-02-5
Route::resource('F7-SETCS-ELE-40-L1-02-1-5', 'App\Http\Controllers\Datoshojasetcs40215Controller');
Route::resource('reversoSETCS40215', 'App\Http\Controllers\Reversosetcs40215Controller');
Route::get('/checkSETCS40215',[Datoshojasetcs40215Controller::class,'check'])->name('checkSETCS40215');
Route::put('/finalcheckSETCS40215/{id}',[Datoshojasetcs40215Controller::class,'finalcheck'])->name('finalcheckSETCS40215');
Route::get('/edit2SETCS40215/{id}',[Datoshojasetcs40215Controller::class,'edit2'])->name('edit2SETCS40215');
Route::put('/update2SETCS40215/{id}',[Datoshojasetcs40215Controller::class,'update2'])->name('update2SETCS40215');
Route::get('/pdfprintSETCS40215',[Datoshojasetcs40215Controller::class,'pdfprint'])->name('pdfprintSETCS40215');
Route::get('/printindexSETCS40215',[Datoshojasetcs40215Controller::class,'printindex'])->name('printindexSETCS40215');
Route::get('/printreversoSETCS40215',[Reversosetcs40215Controller::class,'printreverso'])->name('printreversoSETCS402145');
Route::get('/pdfReversoSETCS40215',[Reversosetcs40215Controller::class,'pdfReverso'])->name('pdfReversoSETCS40215');
//Rutas F7-SETCS-ELE-60-L1-06-1-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-1-1-1', 'App\Http\Controllers\Datoshojasetcs606111Controller');
Route::resource('reversoSETCS606111', 'App\Http\Controllers\Reversosetcs606111Controller');
Route::get('/checkSETCS606111',[Datoshojasetcs606111Controller::class,'check'])->name('checkSETCS606111');
Route::put('/finalcheckSETCS606111/{id}',[Datoshojasetcs606111Controller::class,'finalcheck'])->name('finalcheckSETCS606111');
Route::get('/edit2SETCS606111/{id}',[Datoshojasetcs606111Controller::class,'edit2'])->name('edit2SETCS606111');
Route::put('/update2SETCS606111/{id}',[Datoshojasetcs606111Controller::class,'update2'])->name('update2SETCS606111');
Route::get('/pdfprintSETCS606111',[Datoshojasetcs606111Controller::class,'pdfprint'])->name('pdfprintSETCS606111');
Route::get('/printindexSETCS606111',[Datoshojasetcs606111Controller::class,'printindex'])->name('printindexSETCS606111');
Route::get('/printreversoSETCS606111',[Reversosetcs606111Controller::class,'printreverso'])->name('printreversoSETCS606111');
Route::get('/pdfReversoSETCS606111',[Reversosetcs606111Controller::class,'pdfReverso'])->name('pdfReversoSETCS606111');
//Rutas F7-SETCS-ELE-60-L1-06-1-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-1-2-1', 'App\Http\Controllers\Datoshojasetcs606121Controller');
Route::resource('reversoSETCS606121', 'App\Http\Controllers\Reversosetcs606121Controller');
Route::get('/checkSETCS606121',[Datoshojasetcs606121Controller::class,'check'])->name('checkSETCS606121');
Route::put('/finalcheckSETCS606121/{id}',[Datoshojasetcs606121Controller::class,'finalcheck'])->name('finalcheckSETCS606121');
Route::get('/edit2SETCS606121/{id}',[Datoshojasetcs606121Controller::class,'edit2'])->name('edit2SETCS606121');
Route::put('/update2SETCS606121/{id}',[Datoshojasetcs606121Controller::class,'update2'])->name('update2SETCS606121');
Route::get('/pdfprintSETCS606121',[Datoshojasetcs606121Controller::class,'pdfprint'])->name('pdfprintSETCS606121');
Route::get('/printindexSETCS606121',[Datoshojasetcs606121Controller::class,'printindex'])->name('printindexSETCS606121');
Route::get('/printreversoSETCS606121',[Reversosetcs606121Controller::class,'printreverso'])->name('printreversoSETCS606121');
Route::get('/pdfReversoSETCS606121',[Reversosetcs606121Controller::class,'pdfReverso'])->name('pdfReversoSETCS606121');
//Rutas F7-SETCS-ELE-60-L1-06-2-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-2-1-1', 'App\Http\Controllers\Datoshojasetcs606211Controller');
Route::resource('reversoSETCS606211', 'App\Http\Controllers\Reversosetcs606211Controller');
Route::get('/checkSETCS606211',[Datoshojasetcs606211Controller::class,'check'])->name('checkSETCS606211');
Route::put('/finalcheckSETCS606211/{id}',[Datoshojasetcs606211Controller::class,'finalcheck'])->name('finalcheckSETCS606211');
Route::get('/edit2SETCS606211/{id}',[Datoshojasetcs606211Controller::class,'edit2'])->name('edit2SETCS606211');
Route::put('/update2SETCS606211/{id}',[Datoshojasetcs606211Controller::class,'update2'])->name('update2SETCS606211');
Route::get('/pdfprintSETCS606211',[Datoshojasetcs606211Controller::class,'pdfprint'])->name('pdfprintSETCS606211');
Route::get('/printindexSETCS606211',[Datoshojasetcs606211Controller::class,'printindex'])->name('printindexSETCS606211');
Route::get('/printreversoSETCS606211',[Reversosetcs606211Controller::class,'printreverso'])->name('printreversoSETCS606211');
Route::get('/pdfReversoSETCS606211',[Reversosetcs606211Controller::class,'pdfReverso'])->name('pdfReversoSETCS606211');
//Rutas F7-SETCS-ELE-60-L1-06-2-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-2-2-1', 'App\Http\Controllers\Datoshojasetcs606221Controller');
Route::resource('reversoSETCS606221', 'App\Http\Controllers\Reversosetcs606221Controller');
Route::get('/checkSETCS606221',[Datoshojasetcs606221Controller::class,'check'])->name('checkSETCS606221');
Route::put('/finalcheckSETCS606221/{id}',[Datoshojasetcs606221Controller::class,'finalcheck'])->name('finalcheckSETCS606221');
Route::get('/edit2SETCS606221/{id}',[Datoshojasetcs606221Controller::class,'edit2'])->name('edit2SETCS606221');
Route::put('/update2SETCS606221/{id}',[Datoshojasetcs606221Controller::class,'update2'])->name('update2SETCS606221');
Route::get('/pdfprintSETCS606221',[Datoshojasetcs606221Controller::class,'pdfprint'])->name('pdfprintSETCS606221');
Route::get('/printindexSETCS606221',[Datoshojasetcs606221Controller::class,'printindex'])->name('printindexSETCS606221');
Route::get('/printreversoSETCS606221',[Reversosetcs606221Controller::class,'printreverso'])->name('printreversoSETCS606221');
Route::get('/pdfReversoSETCS606221',[Reversosetcs606221Controller::class,'pdfReverso'])->name('pdfReversoSETCS606221');
//Rutas F7-SETCS-ELE-60-L1-06-3-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-3-1-1', 'App\Http\Controllers\Datoshojasetcs606311Controller');
Route::resource('reversoSETCS606311', 'App\Http\Controllers\Reversosetcs606311Controller');
Route::get('/checkSETCS606311',[Datoshojasetcs606311Controller::class,'check'])->name('checkSETCS606311');
Route::put('/finalcheckSETCS606311/{id}',[Datoshojasetcs606311Controller::class,'finalcheck'])->name('finalcheckSETCS606311');
Route::get('/edit2SETCS606311/{id}',[Datoshojasetcs606311Controller::class,'edit2'])->name('edit2SETCS606311');
Route::put('/update2SETCS606311/{id}',[Datoshojasetcs606311Controller::class,'update2'])->name('update2SETCS606311');
Route::get('/pdfprintSETCS606311',[Datoshojasetcs606311Controller::class,'pdfprint'])->name('pdfprintSETCS606311');
Route::get('/printindexSETCS606311',[Datoshojasetcs606311Controller::class,'printindex'])->name('printindexSETCS606311');
Route::get('/printreversoSETCS606311',[Reversosetcs606311Controller::class,'printreverso'])->name('printreversoSETCS606311');
Route::get('/pdfReversoSETCS606311',[Reversosetcs606311Controller::class,'pdfReverso'])->name('pdfReversoSETCS606311');
//Rutas F7-SETCS-ELE-60-L1-06-3-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-3-2-1', 'App\Http\Controllers\Datoshojasetcs606321Controller');
Route::resource('reversoSETCS606321', 'App\Http\Controllers\Reversosetcs606321Controller');
Route::get('/checkSETCS606321',[Datoshojasetcs606321Controller::class,'check'])->name('checkSETCS606321');
Route::put('/finalcheckSETCS606321/{id}',[Datoshojasetcs606321Controller::class,'finalcheck'])->name('finalcheckSETCS606321');
Route::get('/edit2SETCS606321/{id}',[Datoshojasetcs606321Controller::class,'edit2'])->name('edit2SETCS606321');
Route::put('/update2SETCS606321/{id}',[Datoshojasetcs606321Controller::class,'update2'])->name('update2SETCS606321');
Route::get('/pdfprintSETCS606321',[Datoshojasetcs606321Controller::class,'pdfprint'])->name('pdfprintSETCS606321');
Route::get('/printindexSETCS606321',[Datoshojasetcs606321Controller::class,'printindex'])->name('printindexSETCS606321');
Route::get('/printreversoSETCS606321',[Reversosetcs606321Controller::class,'printreverso'])->name('printreversoSETCS606321');
Route::get('/pdfReversoSETCS606321',[Reversosetcs606321Controller::class,'pdfReverso'])->name('pdfReversoSETCS606321');
//Rutas F7-SETCS-ELE-60-L1-06-4-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-4-1-1', 'App\Http\Controllers\Datoshojasetcs606411Controller');
Route::resource('reversoSETCS606411', 'App\Http\Controllers\Reversosetcs606411Controller');
Route::get('/checkSETCS606411',[Datoshojasetcs606411Controller::class,'check'])->name('checkSETCS606411');
Route::put('/finalcheckSETCS606411/{id}',[Datoshojasetcs606411Controller::class,'finalcheck'])->name('finalcheckSETCS606411');
Route::get('/edit2SETCS606411/{id}',[Datoshojasetcs606411Controller::class,'edit2'])->name('edit2SETCS606411');
Route::put('/update2SETCS606411/{id}',[Datoshojasetcs606411Controller::class,'update2'])->name('update2SETCS606411');
Route::get('/pdfprintSETCS606411',[Datoshojasetcs606411Controller::class,'pdfprint'])->name('pdfprintSETCS606411');
Route::get('/printindexSETCS606411',[Datoshojasetcs606411Controller::class,'printindex'])->name('printindexSETCS606411');
Route::get('/printreversoSETCS606411',[Reversosetcs606411Controller::class,'printreverso'])->name('printreversoSETCS606411');
Route::get('/pdfReversoSETCS606411',[Reversosetcs606411Controller::class,'pdfReverso'])->name('pdfReversoSETCS606411');
//Rutas F7-SETCS-ELE-60-L1-06-4-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-4-2-1', 'App\Http\Controllers\Datoshojasetcs606421Controller');
Route::resource('reversoSETCS606421', 'App\Http\Controllers\Reversosetcs606421Controller');
Route::get('/checkSETCS606421',[Datoshojasetcs606421Controller::class,'check'])->name('checkSETCS606421');
Route::put('/finalcheckSETCS606421/{id}',[Datoshojasetcs606421Controller::class,'finalcheck'])->name('finalcheckSETCS606421');
Route::get('/edit2SETCS606421/{id}',[Datoshojasetcs606421Controller::class,'edit2'])->name('edit2SETCS606421');
Route::put('/update2SETCS606421/{id}',[Datoshojasetcs606421Controller::class,'update2'])->name('update2SETCS606421');
Route::get('/pdfprintSETCS606421',[Datoshojasetcs606421Controller::class,'pdfprint'])->name('pdfprintSETCS606421');
Route::get('/printindexSETCS606421',[Datoshojasetcs606421Controller::class,'printindex'])->name('printindexSETCS606421');
Route::get('/printreversoSETCS606421',[Reversosetcs606421Controller::class,'printreverso'])->name('printreversoSETCS606421');
Route::get('/pdfReversoSETCS606421',[Reversosetcs606421Controller::class,'pdfReverso'])->name('pdfReversoSETCS606421');
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
