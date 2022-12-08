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
use App\Http\Controllers\Reversosetcs606311Controller;
use App\Http\Controllers\Datoshojasetcs606311Controller;
use App\Http\Controllers\Reversosetcs606321Controller;
use App\Http\Controllers\Datoshojasetcs606321Controller;
use App\Http\Controllers\Reversosetcs606411Controller;
use App\Http\Controllers\Datoshojasetcs606411Controller;
use App\Http\Controllers\Reversosetcs606421Controller;
use App\Http\Controllers\Datoshojasetcs606421Controller;
use App\Http\Controllers\Reversosetcs606511Controller;
use App\Http\Controllers\Datoshojasetcs606511Controller;
use App\Http\Controllers\Reversosetcs606521Controller;
use App\Http\Controllers\Datoshojasetcs606521Controller;
use App\Http\Controllers\Reversosetcs606611Controller;
use App\Http\Controllers\Datoshojasetcs606611Controller;
use App\Http\Controllers\Reversosetcs606621Controller;
use App\Http\Controllers\Datoshojasetcs606621Controller;
use App\Http\Controllers\Reversosetcs6081Controller;
use App\Http\Controllers\Datoshojasetcs6081Controller;
use App\Http\Controllers\Reversosetcs100111Controller;
use App\Http\Controllers\Datoshojasetcs100111Controller;
use App\Http\Controllers\Reversosetcs100121Controller;
use App\Http\Controllers\Datoshojasetcs100121Controller;
use App\Http\Controllers\Reversosetcs100131Controller;
use App\Http\Controllers\Datoshojasetcs100131Controller;
use App\Http\Controllers\Reversosetcs10021Controller;
use App\Http\Controllers\Datoshojasetcs10021Controller;
use App\Http\Controllers\Reversosetcs10031Controller;
use App\Http\Controllers\Datoshojasetcs10031Controller;
use App\Http\Controllers\Reversosetcs107111Controller;
use App\Http\Controllers\Datoshojasetcs107111Controller;
use App\Http\Controllers\Reversosetcs107121Controller;
use App\Http\Controllers\Datoshojasetcs107121Controller;
use App\Http\Controllers\Reversosetcs107131Controller;
use App\Http\Controllers\Datoshojasetcs107131Controller;
use App\Http\Controllers\Reversosetcs10721Controller;
use App\Http\Controllers\Datoshojasetcs10721Controller;
use App\Http\Controllers\Reversosetcs120111Controller;
use App\Http\Controllers\Datoshojasetcs120111Controller;
use App\Http\Controllers\Reversosetcs120121Controller;
use App\Http\Controllers\Datoshojasetcs120121Controller;
use App\Http\Controllers\Reversosetcs120131Controller;
use App\Http\Controllers\Datoshojasetcs120131Controller;
use App\Http\Controllers\Reversosetcs120141Controller;
use App\Http\Controllers\Datoshojasetcs120141Controller;
use App\Http\Controllers\Reversosetcs120151Controller;
use App\Http\Controllers\Datoshojasetcs120151Controller;
use App\Http\Controllers\Reversosetcs140111Controller;
use App\Http\Controllers\Datoshojasetcs140111Controller;
use App\Http\Controllers\Reversosetcs140121Controller;
use App\Http\Controllers\Datoshojasetcs140121Controller;
use App\Http\Controllers\Reversosetcs140131Controller;
use App\Http\Controllers\Datoshojasetcs140131Controller;
use App\Http\Controllers\Reversosetcs16011Controller;
use App\Http\Controllers\Datoshojasetcs16011Controller;
use App\Http\Controllers\Reversosetcs18011Controller;
use App\Http\Controllers\Datoshojasetcs18011Controller;
use App\Http\Controllers\Reversotpm4011Controller;
use App\Http\Controllers\Datoshojastpm4011Controller;
use App\Http\Controllers\Reversotpm6011Controller;
use App\Http\Controllers\Datoshojastpm6011Controller;
use App\Http\Controllers\Reversotpm10011Controller;
use App\Http\Controllers\Datoshojastpm10011Controller;
use App\Http\Controllers\Reversotpm10711Controller;
use App\Http\Controllers\Datoshojastpm10711Controller;
use App\Http\Controllers\Reversotpm120111Controller;
use App\Http\Controllers\Datoshojastpm120111Controller;
use App\Http\Controllers\Reversotpm120121Controller;
use App\Http\Controllers\Datoshojastpm120121Controller;
use App\Http\Controllers\Reversotpm14011Controller;
use App\Http\Controllers\Datoshojastpm14011Controller;
use App\Http\Controllers\Reversotpm16011Controller;
use App\Http\Controllers\Datoshojastpm16011Controller;
use App\Http\Controllers\Reversotpm18011Controller;
use App\Http\Controllers\Datoshojastpm18011Controller;
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
Route::resource('F7-SETCS-ELE-20-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs201Controller');
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
//Rutas F7-SETCS-ELE-60-L1-06-5-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-5-1-1', 'App\Http\Controllers\Datoshojasetcs606511Controller');
Route::resource('reversoSETCS606511', 'App\Http\Controllers\Reversosetcs606511Controller');
Route::get('/checkSETCS606511',[Datoshojasetcs606511Controller::class,'check'])->name('checkSETCS606511');
Route::put('/finalcheckSETCS606511/{id}',[Datoshojasetcs606511Controller::class,'finalcheck'])->name('finalcheckSETCS606511');
Route::get('/edit2SETCS606511/{id}',[Datoshojasetcs606511Controller::class,'edit2'])->name('edit2SETCS606511');
Route::put('/update2SETCS606511/{id}',[Datoshojasetcs606511Controller::class,'update2'])->name('update2SETCS606511');
Route::get('/pdfprintSETCS606511',[Datoshojasetcs606511Controller::class,'pdfprint'])->name('pdfprintSETCS606511');
Route::get('/printindexSETCS606511',[Datoshojasetcs606511Controller::class,'printindex'])->name('printindexSETCS606511');
Route::get('/printreversoSETCS606511',[Reversosetcs606511Controller::class,'printreverso'])->name('printreversoSETCS606511');
Route::get('/pdfReversoSETCS606511',[Reversosetcs606511Controller::class,'pdfReverso'])->name('pdfReversoSETCS606511');
//Rutas F7-SETCS-ELE-60-L1-06-5-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-5-2-1', 'App\Http\Controllers\Datoshojasetcs606521Controller');
Route::resource('reversoSETCS606521', 'App\Http\Controllers\Reversosetcs606521Controller');
Route::get('/checkSETCS606521',[Datoshojasetcs606521Controller::class,'check'])->name('checkSETCS606521');
Route::put('/finalcheckSETCS606521/{id}',[Datoshojasetcs606521Controller::class,'finalcheck'])->name('finalcheckSETCS606521');
Route::get('/edit2SETCS606521/{id}',[Datoshojasetcs606521Controller::class,'edit2'])->name('edit2SETCS606521');
Route::put('/update2SETCS606521/{id}',[Datoshojasetcs606521Controller::class,'update2'])->name('update2SETCS606521');
Route::get('/pdfprintSETCS606521',[Datoshojasetcs606521Controller::class,'pdfprint'])->name('pdfprintSETCS606521');
Route::get('/printindexSETCS606521',[Datoshojasetcs606521Controller::class,'printindex'])->name('printindexSETCS606521');
Route::get('/printreversoSETCS606521',[Reversosetcs606521Controller::class,'printreverso'])->name('printreversoSETCS606521');
Route::get('/pdfReversoSETCS606521',[Reversosetcs606521Controller::class,'pdfReverso'])->name('pdfReversoSETCS606521');
//Rutas F7-SETCS-ELE-60-L1-06-6-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-6-1-1', 'App\Http\Controllers\Datoshojasetcs606611Controller');
Route::resource('reversoSETCS606611', 'App\Http\Controllers\Reversosetcs606611Controller');
Route::get('/checkSETCS606611',[Datoshojasetcs606611Controller::class,'check'])->name('checkSETCS606611');
Route::put('/finalcheckSETCS606611/{id}',[Datoshojasetcs606611Controller::class,'finalcheck'])->name('finalcheckSETCS606611');
Route::get('/edit2SETCS606611/{id}',[Datoshojasetcs606611Controller::class,'edit2'])->name('edit2SETCS606611');
Route::put('/update2SETCS606611/{id}',[Datoshojasetcs606611Controller::class,'update2'])->name('update2SETCS606611');
Route::get('/pdfprintSETCS606611',[Datoshojasetcs606611Controller::class,'pdfprint'])->name('pdfprintSETCS606611');
Route::get('/printindexSETCS606611',[Datoshojasetcs606611Controller::class,'printindex'])->name('printindexSETCS606611');
Route::get('/printreversoSETCS606611',[Reversosetcs606611Controller::class,'printreverso'])->name('printreversoSETCS606611');
Route::get('/pdfReversoSETCS606611',[Reversosetcs606611Controller::class,'pdfReverso'])->name('pdfReversoSETCS606611');
//Rutas F7-SETCS-ELE-60-L1-06-6-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-6-2-1', 'App\Http\Controllers\Datoshojasetcs606621Controller');
Route::resource('reversoSETCS606621', 'App\Http\Controllers\Reversosetcs606621Controller');
Route::get('/checkSETCS606621',[Datoshojasetcs606621Controller::class,'check'])->name('checkSETCS606621');
Route::put('/finalcheckSETCS606621/{id}',[Datoshojasetcs606621Controller::class,'finalcheck'])->name('finalcheckSETCS606621');
Route::get('/edit2SETCS606621/{id}',[Datoshojasetcs606621Controller::class,'edit2'])->name('edit2SETCS606621');
Route::put('/update2SETCS606621/{id}',[Datoshojasetcs606621Controller::class,'update2'])->name('update2SETCS606621');
Route::get('/pdfprintSETCS606621',[Datoshojasetcs606621Controller::class,'pdfprint'])->name('pdfprintSETCS606621');
Route::get('/printindexSETCS606621',[Datoshojasetcs606621Controller::class,'printindex'])->name('printindexSETCS606621');
Route::get('/printreversoSETCS606621',[Reversosetcs606621Controller::class,'printreverso'])->name('printreversoSETCS606621');
Route::get('/pdfReversoSETCS606621',[Reversosetcs606621Controller::class,'pdfReverso'])->name('pdfReversoSETCS606621');
//Rutas F7-SETCS-ELE-60-L1-08-1
Route::resource('F7-SETCS-ELE-60-L1-08-1', 'App\Http\Controllers\Datoshojasetcs6081Controller');
Route::resource('reversoSETCS6081', 'App\Http\Controllers\Reversosetcs6081Controller');
Route::get('/checkSETCS6081',[Datoshojasetcs6081Controller::class,'check'])->name('checkSETCS6081');
Route::put('/finalcheckSETCS6081/{id}',[Datoshojasetcs6081Controller::class,'finalcheck'])->name('finalcheckSETCS6081');
Route::get('/edit2SETCS6081/{id}',[Datoshojasetcs6081Controller::class,'edit2'])->name('edit2SETCS6081');
Route::put('/update2SETCS6081/{id}',[Datoshojasetcs6081Controller::class,'update2'])->name('update2SETCS6081');
Route::get('/pdfprintSETCS6081',[Datoshojasetcs6081Controller::class,'pdfprint'])->name('pdfprintSETCS6081');
Route::get('/printindexSETCS6081',[Datoshojasetcs6081Controller::class,'printindex'])->name('printindexSETCS6081');
Route::get('/printreversoSETCS6081',[Reversosetcs6081Controller::class,'printreverso'])->name('printreversoSETCS6081');
Route::get('/pdfReversoSETCS6081',[Reversosetcs6081Controller::class,'pdfReverso'])->name('pdfReversoSETCS6081');
//Rutas F7-SETCS-ELE-100-L1-01-1
Route::resource('F7-SETCS-ELE-100-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs100111Controller');
Route::resource('reversoSETCS100111', 'App\Http\Controllers\Reversosetcs100111Controller');
Route::get('/checkSETCS100111',[Datoshojasetcs100111Controller::class,'check'])->name('checkSETCS100111');
Route::put('/finalcheckSETCS100111/{id}',[Datoshojasetcs100111Controller::class,'finalcheck'])->name('finalcheckSETCS100111');
Route::get('/edit2SETCS100111/{id}',[Datoshojasetcs100111Controller::class,'edit2'])->name('edit2SETCS100111');
Route::put('/update2SETCS100111/{id}',[Datoshojasetcs100111Controller::class,'update2'])->name('update2SETCS100111');
Route::get('/pdfprintSETCS100111',[Datoshojasetcs100111Controller::class,'pdfprint'])->name('pdfprintSETCS100111');
Route::get('/printindexSETCS100111',[Datoshojasetcs100111Controller::class,'printindex'])->name('printindexSETCS100111');
Route::get('/printreversoSETCS100111',[Reversosetcs100111Controller::class,'printreverso'])->name('printreversoSETCS100111');
Route::get('/pdfReversoSETCS100111',[Reversosetcs100111Controller::class,'pdfReverso'])->name('pdfReversoSETCS100111');
//Rutas F7-SETCS-ELE-100-L1-01-2
Route::resource('F7-SETCS-ELE-100-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs100121Controller');
Route::resource('reversoSETCS100121', 'App\Http\Controllers\Reversosetcs100121Controller');
Route::get('/checkSETCS100121',[Datoshojasetcs100121Controller::class,'check'])->name('checkSETCS100121');
Route::put('/finalcheckSETCS100121/{id}',[Datoshojasetcs100121Controller::class,'finalcheck'])->name('finalcheckSETCS100121');
Route::get('/edit2SETCS100121/{id}',[Datoshojasetcs100121Controller::class,'edit2'])->name('edit2SETCS100121');
Route::put('/update2SETCS100121/{id}',[Datoshojasetcs100121Controller::class,'update2'])->name('update2SETCS100121');
Route::get('/pdfprintSETCS100121',[Datoshojasetcs100121Controller::class,'pdfprint'])->name('pdfprintSETCS100121');
Route::get('/printindexSETCS100121',[Datoshojasetcs100121Controller::class,'printindex'])->name('printindexSETCS100121');
Route::get('/printreversoSETCS100121',[Reversosetcs100121Controller::class,'printreverso'])->name('printreversoSETCS100121');
Route::get('/pdfReversoSETCS100121',[Reversosetcs100121Controller::class,'pdfReverso'])->name('pdfReversoSETCS100121');
//Rutas F7-SETCS-ELE-100-L1-01-3
Route::resource('F7-SETCS-ELE-100-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs100131Controller');
Route::resource('reversoSETCS100131', 'App\Http\Controllers\Reversosetcs100131Controller');
Route::get('/checkSETCS100131',[Datoshojasetcs100131Controller::class,'check'])->name('checkSETCS100131');
Route::put('/finalcheckSETCS100131/{id}',[Datoshojasetcs100131Controller::class,'finalcheck'])->name('finalcheckSETCS100131');
Route::get('/edit2SETCS100131/{id}',[Datoshojasetcs100131Controller::class,'edit2'])->name('edit2SETCS100131');
Route::put('/update2SETCS100131/{id}',[Datoshojasetcs100131Controller::class,'update2'])->name('update2SETCS100131');
Route::get('/pdfprintSETCS100131',[Datoshojasetcs100131Controller::class,'pdfprint'])->name('pdfprintSETCS100131');
Route::get('/printindexSETCS100131',[Datoshojasetcs100131Controller::class,'printindex'])->name('printindexSETCS100131');
Route::get('/printreversoSETCS100131',[Reversosetcs100131Controller::class,'printreverso'])->name('printreversoSETCS100131');
Route::get('/pdfReversoSETCS100131',[Reversosetcs100131Controller::class,'pdfReverso'])->name('pdfReversoSETCS100131');
//Rutas F7-SETCS-ELE-100-L1-02
Route::resource('F7-SETCS-ELE-100-L1-02-1', 'App\Http\Controllers\Datoshojasetcs10021Controller');
Route::resource('reversoSETCS10021', 'App\Http\Controllers\Reversosetcs10021Controller');
Route::get('/checkSETCS10021',[Datoshojasetcs10021Controller::class,'check'])->name('checkSETCS10021');
Route::put('/finalcheckSETCS10021/{id}',[Datoshojasetcs10021Controller::class,'finalcheck'])->name('finalcheckSETCS10021');
Route::get('/edit2SETCS10021/{id}',[Datoshojasetcs10021Controller::class,'edit2'])->name('edit2SETCS10021');
Route::put('/update2SETCS10021/{id}',[Datoshojasetcs10021Controller::class,'update2'])->name('update2SETCS10021');
Route::get('/pdfprintSETCS10021',[Datoshojasetcs10021Controller::class,'pdfprint'])->name('pdfprintSETCS10021');
Route::get('/printindexSETCS10021',[Datoshojasetcs10021Controller::class,'printindex'])->name('printindexSETCS10021');
Route::get('/printreversoSETCS10021',[Reversosetcs10021Controller::class,'printreverso'])->name('printreversoSETCS10021');
Route::get('/pdfReversoSETCS10021',[Reversosetcs10021Controller::class,'pdfReverso'])->name('pdfReversoSETCS10021');
//Rutas F7-SETCS-ELE-100-L1-03
Route::resource('F7-SETCS-ELE-100-L1-03-1', 'App\Http\Controllers\Datoshojasetcs10031Controller');
Route::resource('reversoSETCS10031', 'App\Http\Controllers\Reversosetcs10031Controller');
Route::get('/checkSETCS10031',[Datoshojasetcs10031Controller::class,'check'])->name('checkSETCS10031');
Route::put('/finalcheckSETCS10031/{id}',[Datoshojasetcs10031Controller::class,'finalcheck'])->name('finalcheckSETCS10031');
Route::get('/edit2SETCS10031/{id}',[Datoshojasetcs10031Controller::class,'edit2'])->name('edit2SETCS10031');
Route::put('/update2SETCS10031/{id}',[Datoshojasetcs10031Controller::class,'update2'])->name('update2SETCS10031');
Route::get('/pdfprintSETCS10031',[Datoshojasetcs10031Controller::class,'pdfprint'])->name('pdfprintSETCS10031');
Route::get('/printindexSETCS10031',[Datoshojasetcs10031Controller::class,'printindex'])->name('printindexSETCS10031');
Route::get('/printreversoSETCS10031',[Reversosetcs10031Controller::class,'printreverso'])->name('printreversoSETCS10031');
Route::get('/pdfReversoSETCS10031',[Reversosetcs10031Controller::class,'pdfReverso'])->name('pdfReversoSETCS10031');
//Rutas F7-SETCS-ELE-103-L1-01
Route::resource('F7-SETCS-ELE-103-L1-01-1', 'App\Http\Controllers\Datoshojasetcs10311Controller');
Route::resource('reversoSETCS10311', 'App\Http\Controllers\Reversosetcs10311Controller');
Route::get('/checkSETCS10311',[Datoshojasetcs10311Controller::class,'check'])->name('checkSETCS10311');
Route::put('/finalcheckSETCS10311/{id}',[Datoshojasetcs10311Controller::class,'finalcheck'])->name('finalcheckSETCS10311');
Route::get('/edit2SETCS10311/{id}',[Datoshojasetcs10311Controller::class,'edit2'])->name('edit2SETCS10311');
Route::put('/update2SETCS10311/{id}',[Datoshojasetcs10311Controller::class,'update2'])->name('update2SETCS10311');
Route::get('/pdfprintSETCS10311',[Datoshojasetcs10311Controller::class,'pdfprint'])->name('pdfprintSETCS10311');
Route::get('/printindexSETCS10311',[Datoshojasetcs10311Controller::class,'printindex'])->name('printindexSETCS10311');
Route::get('/printreversoSETCS10311',[Reversosetcs10311Controller::class,'printreverso'])->name('printreversoSETCS10311');
Route::get('/pdfReversoSETCS10311',[Reversosetcs10311Controller::class,'pdfReverso'])->name('pdfReversoSETCS10311');
//Rutas F7-SETCS-ELE-107-L1-01-1
Route::resource('F7-SETCS-ELE-107-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs107111Controller');
Route::resource('reversoSETCS107111', 'App\Http\Controllers\Reversosetcs107111Controller');
Route::get('/checkSETCS107111',[Datoshojasetcs107111Controller::class,'check'])->name('checkSETCS107111');
Route::put('/finalcheckSETCS107111/{id}',[Datoshojasetcs107111Controller::class,'finalcheck'])->name('finalcheckSETCS107111');
Route::get('/edit2SETCS107111/{id}',[Datoshojasetcs107111Controller::class,'edit2'])->name('edit2SETCS107111');
Route::put('/update2SETCS107111/{id}',[Datoshojasetcs107111Controller::class,'update2'])->name('update2SETCS107111');
Route::get('/pdfprintSETCS107111',[Datoshojasetcs107111Controller::class,'pdfprint'])->name('pdfprintSETCS107111');
Route::get('/printindexSETCS107111',[Datoshojasetcs107111Controller::class,'printindex'])->name('printindexSETCS107111');
Route::get('/printreversoSETCS107111',[Reversosetcs107111Controller::class,'printreverso'])->name('printreversoSETCS107111');
Route::get('/pdfReversoSETCS107111',[Reversosetcs107111Controller::class,'pdfReverso'])->name('pdfReversoSETCS107111');
//Rutas F7-SETCS-ELE-107-L1-01-2
Route::resource('F7-SETCS-ELE-107-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs107121Controller');
Route::resource('reversoSETCS107121', 'App\Http\Controllers\Reversosetcs107121Controller');
Route::get('/checkSETCS107121',[Datoshojasetcs107121Controller::class,'check'])->name('checkSETCS107121');
Route::put('/finalcheckSETCS107121/{id}',[Datoshojasetcs107121Controller::class,'finalcheck'])->name('finalcheckSETCS107121');
Route::get('/edit2SETCS107121/{id}',[Datoshojasetcs107121Controller::class,'edit2'])->name('edit2SETCS107121');
Route::put('/update2SETCS107121/{id}',[Datoshojasetcs107121Controller::class,'update2'])->name('update2SETCS107121');
Route::get('/pdfprintSETCS107121',[Datoshojasetcs107121Controller::class,'pdfprint'])->name('pdfprintSETCS107121');
Route::get('/printindexSETCS107121',[Datoshojasetcs107121Controller::class,'printindex'])->name('printindexSETCS107121');
Route::get('/printreversoSETCS107121',[Reversosetcs107121Controller::class,'printreverso'])->name('printreversoSETCS107121');
Route::get('/pdfReversoSETCS107121',[Reversosetcs107121Controller::class,'pdfReverso'])->name('pdfReversoSETCS107121');
//Rutas F7-SETCS-ELE-107-L1-01-3
Route::resource('F7-SETCS-ELE-107-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs107131Controller');
Route::resource('reversoSETCS107131', 'App\Http\Controllers\Reversosetcs107131Controller');
Route::get('/checkSETCS107131',[Datoshojasetcs107131Controller::class,'check'])->name('checkSETCS107131');
Route::put('/finalcheckSETCS107131/{id}',[Datoshojasetcs107131Controller::class,'finalcheck'])->name('finalcheckSETCS107131');
Route::get('/edit2SETCS107131/{id}',[Datoshojasetcs107131Controller::class,'edit2'])->name('edit2SETCS107131');
Route::put('/update2SETCS107131/{id}',[Datoshojasetcs107131Controller::class,'update2'])->name('update2SETCS107131');
Route::get('/pdfprintSETCS107131',[Datoshojasetcs107131Controller::class,'pdfprint'])->name('pdfprintSETCS107131');
Route::get('/printindexSETCS107131',[Datoshojasetcs107131Controller::class,'printindex'])->name('printindexSETCS107131');
Route::get('/printreversoSETCS107131',[Reversosetcs107131Controller::class,'printreverso'])->name('printreversoSETCS107131');
Route::get('/pdfReversoSETCS107131',[Reversosetcs107131Controller::class,'pdfReverso'])->name('pdfReversoSETCS107131');
//Rutas F7-SETCS-ELE-107-L1-02
Route::resource('F7-SETCS-ELE-107-L1-02-1', 'App\Http\Controllers\Datoshojasetcs10721Controller');
Route::resource('reversoSETCS10721', 'App\Http\Controllers\Reversosetcs10721Controller');
Route::get('/checkSETCS10721',[Datoshojasetcs10721Controller::class,'check'])->name('checkSETCS10721');
Route::put('/finalcheckSETCS10721/{id}',[Datoshojasetcs10721Controller::class,'finalcheck'])->name('finalcheckSETCS10721');
Route::get('/edit2SETCS10721/{id}',[Datoshojasetcs10721Controller::class,'edit2'])->name('edit2SETCS10721');
Route::put('/update2SETCS10721/{id}',[Datoshojasetcs10721Controller::class,'update2'])->name('update2SETCS10721');
Route::get('/pdfprintSETCS10721',[Datoshojasetcs10721Controller::class,'pdfprint'])->name('pdfprintSETCS10721');
Route::get('/printindexSETCS10721',[Datoshojasetcs10721Controller::class,'printindex'])->name('printindexSETCS10721');
Route::get('/printreversoSETCS10721',[Reversosetcs10721Controller::class,'printreverso'])->name('printreversoSETCS10721');
Route::get('/pdfReversoSETCS10721',[Reversosetcs10721Controller::class,'pdfReverso'])->name('pdfReversoSETCS10721');
//Rutas F7-SETCS-ELE-120-L1-01-1
Route::resource('F7-SETCS-ELE-120-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs120111Controller');
Route::resource('reversoSETCS120111', 'App\Http\Controllers\Reversosetcs120111Controller');
Route::get('/checkSETCS120111',[Datoshojasetcs120111Controller::class,'check'])->name('checkSETCS120111');
Route::put('/finalcheckSETCS120111/{id}',[Datoshojasetcs120111Controller::class,'finalcheck'])->name('finalcheckSETCS120111');
Route::get('/edit2SETCS120111/{id}',[Datoshojasetcs120111Controller::class,'edit2'])->name('edit2SETCS120111');
Route::put('/update2SETCS120111/{id}',[Datoshojasetcs120111Controller::class,'update2'])->name('update2SETCS120111');
Route::get('/pdfprintSETCS120111',[Datoshojasetcs120111Controller::class,'pdfprint'])->name('pdfprintSETCS120111');
Route::get('/printindexSETCS120111',[Datoshojasetcs120111Controller::class,'printindex'])->name('printindexSETCS120111');
Route::get('/printreversoSETCS120111',[Reversosetcs120111Controller::class,'printreverso'])->name('printreversoSETCS120111');
Route::get('/pdfReversoSETCS120111',[Reversosetcs120111Controller::class,'pdfReverso'])->name('pdfReversoSETCS120111');
//Rutas F7-SETCS-ELE-120-L1-01-2
Route::resource('F7-SETCS-ELE-120-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs120121Controller');
Route::resource('reversoSETCS120121', 'App\Http\Controllers\Reversosetcs120121Controller');
Route::get('/checkSETCS120121',[Datoshojasetcs120121Controller::class,'check'])->name('checkSETCS120121');
Route::put('/finalcheckSETCS120121/{id}',[Datoshojasetcs120121Controller::class,'finalcheck'])->name('finalcheckSETCS120121');
Route::get('/edit2SETCS120121/{id}',[Datoshojasetcs120121Controller::class,'edit2'])->name('edit2SETCS120121');
Route::put('/update2SETCS120121/{id}',[Datoshojasetcs120121Controller::class,'update2'])->name('update2SETCS120121');
Route::get('/pdfprintSETCS120121',[Datoshojasetcs120121Controller::class,'pdfprint'])->name('pdfprintSETCS120121');
Route::get('/printindexSETCS120121',[Datoshojasetcs120121Controller::class,'printindex'])->name('printindexSETCS120121');
Route::get('/printreversoSETCS120121',[Reversosetcs120121Controller::class,'printreverso'])->name('printreversoSETCS120121');
Route::get('/pdfReversoSETCS120121',[Reversosetcs120121Controller::class,'pdfReverso'])->name('pdfReversoSETCS120121');
//Rutas F7-SETCS-ELE-120-L1-01-3
Route::resource('F7-SETCS-ELE-120-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs120131Controller');
Route::resource('reversoSETCS120131', 'App\Http\Controllers\Reversosetcs120131Controller');
Route::get('/checkSETCS120131',[Datoshojasetcs120131Controller::class,'check'])->name('checkSETCS120131');
Route::put('/finalcheckSETCS120131/{id}',[Datoshojasetcs120131Controller::class,'finalcheck'])->name('finalcheckSETCS120131');
Route::get('/edit2SETCS120131/{id}',[Datoshojasetcs120131Controller::class,'edit2'])->name('edit2SETCS120131');
Route::put('/update2SETCS120131/{id}',[Datoshojasetcs120131Controller::class,'update2'])->name('update2SETCS120131');
Route::get('/pdfprintSETCS120131',[Datoshojasetcs120131Controller::class,'pdfprint'])->name('pdfprintSETCS120131');
Route::get('/printindexSETCS120131',[Datoshojasetcs120131Controller::class,'printindex'])->name('printindexSETCS120131');
Route::get('/printreversoSETCS120131',[Reversosetcs120131Controller::class,'printreverso'])->name('printreversoSETCS120131');
Route::get('/pdfReversoSETCS120131',[Reversosetcs120131Controller::class,'pdfReverso'])->name('pdfReversoSETCS120131');
//Rutas F7-SETCS-ELE-120-L1-01-4
Route::resource('F7-SETCS-ELE-120-L1-01-4-1', 'App\Http\Controllers\Datoshojasetcs120141Controller');
Route::resource('reversoSETCS120141', 'App\Http\Controllers\Reversosetcs120141Controller');
Route::get('/checkSETCS120141',[Datoshojasetcs120141Controller::class,'check'])->name('checkSETCS120141');
Route::put('/finalcheckSETCS120141/{id}',[Datoshojasetcs120141Controller::class,'finalcheck'])->name('finalcheckSETCS120141');
Route::get('/edit2SETCS120141/{id}',[Datoshojasetcs120141Controller::class,'edit2'])->name('edit2SETCS120141');
Route::put('/update2SETCS120141/{id}',[Datoshojasetcs120141Controller::class,'update2'])->name('update2SETCS120141');
Route::get('/pdfprintSETCS120141',[Datoshojasetcs120141Controller::class,'pdfprint'])->name('pdfprintSETCS120141');
Route::get('/printindexSETCS120141',[Datoshojasetcs120141Controller::class,'printindex'])->name('printindexSETCS120141');
Route::get('/printreversoSETCS120141',[Reversosetcs120141Controller::class,'printreverso'])->name('printreversoSETCS120141');
Route::get('/pdfReversoSETCS120141',[Reversosetcs120141Controller::class,'pdfReverso'])->name('pdfReversoSETCS120141');
//Rutas F7-SETCS-ELE-120-L1-01-5
Route::resource('F7-SETCS-ELE-120-L1-01-5-1', 'App\Http\Controllers\Datoshojasetcs120151Controller');
Route::resource('reversoSETCS120151', 'App\Http\Controllers\Reversosetcs120151Controller');
Route::get('/checkSETCS120151',[Datoshojasetcs120151Controller::class,'check'])->name('checkSETCS120151');
Route::put('/finalcheckSETCS120151/{id}',[Datoshojasetcs120151Controller::class,'finalcheck'])->name('finalcheckSETCS120151');
Route::get('/edit2SETCS120151/{id}',[Datoshojasetcs120151Controller::class,'edit2'])->name('edit2SETCS120151');
Route::put('/update2SETCS120151/{id}',[Datoshojasetcs120151Controller::class,'update2'])->name('update2SETCS120151');
Route::get('/pdfprintSETCS120151',[Datoshojasetcs120151Controller::class,'pdfprint'])->name('pdfprintSETCS120151');
Route::get('/printindexSETCS120151',[Datoshojasetcs120151Controller::class,'printindex'])->name('printindexSETCS120151');
Route::get('/printreversoSETCS120151',[Reversosetcs120151Controller::class,'printreverso'])->name('printreversoSETCS120151');
Route::get('/pdfReversoSETCS120151',[Reversosetcs120151Controller::class,'pdfReverso'])->name('pdfReversoSETCS120151');
//Rutas F7-SETCS-ELE-140-L1-01-1
Route::resource('F7-SETCS-ELE-140-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs140111Controller');
Route::resource('reversoSETCS140111', 'App\Http\Controllers\Reversosetcs140111Controller');
Route::get('/checkSETCS140111',[Datoshojasetcs140111Controller::class,'check'])->name('checkSETCS140111');
Route::put('/finalcheckSETCS140111/{id}',[Datoshojasetcs140111Controller::class,'finalcheck'])->name('finalcheckSETCS140111');
Route::get('/edit2SETCS140111/{id}',[Datoshojasetcs140111Controller::class,'edit2'])->name('edit2SETCS140111');
Route::put('/update2SETCS140111/{id}',[Datoshojasetcs140111Controller::class,'update2'])->name('update2SETCS140111');
Route::get('/pdfprintSETCS140111',[Datoshojasetcs140111Controller::class,'pdfprint'])->name('pdfprintSETCS140111');
Route::get('/printindexSETCS140111',[Datoshojasetcs1440111Controller::class,'printindex'])->name('printindexSETCS140111');
Route::get('/printreversoSETCS140111',[Reversosetcs140111Controller::class,'printreverso'])->name('printreversoSETCS140111');
Route::get('/pdfReversoSETCS140111',[Reversosetcs140111Controller::class,'pdfReverso'])->name('pdfReversoSETCS140111');
//Rutas F7-SETCS-ELE-140-L1-01-2
Route::resource('F7-SETCS-ELE-140-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs140121Controller');
Route::resource('reversoSETCS140121', 'App\Http\Controllers\Reversosetcs140121Controller');
Route::get('/checkSETCS140121',[Datoshojasetcs140121Controller::class,'check'])->name('checkSETCS140121');
Route::put('/finalcheckSETCS140121/{id}',[Datoshojasetcs140121Controller::class,'finalcheck'])->name('finalcheckSETCS140121');
Route::get('/edit2SETCS140121/{id}',[Datoshojasetcs140121Controller::class,'edit2'])->name('edit2SETCS140121');
Route::put('/update2SETCS140121/{id}',[Datoshojasetcs140121Controller::class,'update2'])->name('update2SETCS140121');
Route::get('/pdfprintSETCS140121',[Datoshojasetcs140121Controller::class,'pdfprint'])->name('pdfprintSETCS140121');
Route::get('/printindexSETCS140121',[Datoshojasetcs1440121Controller::class,'printindex'])->name('printindexSETCS140121');
Route::get('/printreversoSETCS140121',[Reversosetcs140121Controller::class,'printreverso'])->name('printreversoSETCS140121');
Route::get('/pdfReversoSETCS140121',[Reversosetcs140121Controller::class,'pdfReverso'])->name('pdfReversoSETCS140121');
//Rutas F7-SETCS-ELE-140-L1-01-3
Route::resource('F7-SETCS-ELE-140-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs140131Controller');
Route::resource('reversoSETCS140131', 'App\Http\Controllers\Reversosetcs140131Controller');
Route::get('/checkSETCS140131',[Datoshojasetcs140131Controller::class,'check'])->name('checkSETCS140131');
Route::put('/finalcheckSETCS140131/{id}',[Datoshojasetcs140131Controller::class,'finalcheck'])->name('finalcheckSETCS140131');
Route::get('/edit2SETCS140131/{id}',[Datoshojasetcs140131Controller::class,'edit2'])->name('edit2SETCS140131');
Route::put('/update2SETCS140131/{id}',[Datoshojasetcs140131Controller::class,'update2'])->name('update2SETCS140131');
Route::get('/pdfprintSETCS140131',[Datoshojasetcs140131Controller::class,'pdfprint'])->name('pdfprintSETCS140131');
Route::get('/printindexSETCS140131',[Datoshojasetcs140131Controller::class,'printindex'])->name('printindexSETCS140131');
Route::get('/printreversoSETCS140131',[Reversosetcs140131Controller::class,'printreverso'])->name('printreversoSETCS140131');
Route::get('/pdfReversoSETCS140131',[Reversosetcs140131Controller::class,'pdfReverso'])->name('pdfReversoSETCS140131');
//Rutas F7-SETCS-ELE-160-L1-01
Route::resource('F7-SETCS-ELE-160-L1-01-1', 'App\Http\Controllers\Datoshojasetcs16011Controller');
Route::resource('reversoSETCS16011', 'App\Http\Controllers\Reversosetcs16011Controller');
Route::get('/checkSETCS16011',[Datoshojasetcs16011Controller::class,'check'])->name('checkSETCS16011');
Route::put('/finalcheckSETCS16011/{id}',[Datoshojasetcs16011Controller::class,'finalcheck'])->name('finalcheckSETCS16011');
Route::get('/edit2SETCS16011/{id}',[Datoshojasetcs16011Controller::class,'edit2'])->name('edit2SETCS16011');
Route::put('/update2SETCS16011/{id}',[Datoshojasetcs16011Controller::class,'update2'])->name('update2SETCS16011');
Route::get('/pdfprintSETCS16011',[Datoshojasetcs16011Controller::class,'pdfprint'])->name('pdfprintSETCS16011');
Route::get('/printindexSETCS16011',[Datoshojasetcs16011Controller::class,'printindex'])->name('printindexSETCS16011');
Route::get('/printreversoSETCS16011',[Reversosetcs16011Controller::class,'printreverso'])->name('printreversoSETCS16011');
Route::get('/pdfReversoSETCS16011',[Reversosetcs16011Controller::class,'pdfReverso'])->name('pdfReversoSETCS16011');
//Rutas F7-SETCS-ELE-180-L1-01
Route::resource('F7-SETCS-ELE-180-L1-01-1', 'App\Http\Controllers\Datoshojasetcs18011Controller');
Route::resource('reversoSETCS18011', 'App\Http\Controllers\Reversosetcs18011Controller');
Route::get('/checkSETCS18011',[Datoshojasetcs18011Controller::class,'check'])->name('checkSETCS18011');
Route::put('/finalcheckSETCS18011/{id}',[Datoshojasetcs18011Controller::class,'finalcheck'])->name('finalcheckSETCS18011');
Route::get('/edit2SETCS18011/{id}',[Datoshojasetcs18011Controller::class,'edit2'])->name('edit2SETCS18011');
Route::put('/update2SETCS18011/{id}',[Datoshojasetcs18011Controller::class,'update2'])->name('update2SETCS18011');
Route::get('/pdfprintSETCS18011',[Datoshojasetcs18011Controller::class,'pdfprint'])->name('pdfprintSETCS18011');
Route::get('/printindexSETCS18011',[Datoshojasetcs18011Controller::class,'printindex'])->name('printindexSETCS18011');
Route::get('/printreversoSETCS18011',[Reversosetcs18011Controller::class,'printreverso'])->name('printreversoSETCS18011');
Route::get('/pdfReversoSETCS18011',[Reversosetcs18011Controller::class,'pdfReverso'])->name('pdfReversoSETCS18011');
//Rutas F7-TPM-ELE-40-L1-01
Route::resource('F7-TPM-ELE-40-L1-01-1', 'App\Http\Controllers\Datoshojastpm4011Controller');
Route::resource('reversoTPM4011', 'App\Http\Controllers\Reversotpm4011Controller');
Route::get('/checkTPM4011',[Datoshojastpm4011Controller::class,'check'])->name('checkTPM4011');
Route::put('/finalcheckTPM4011/{id}',[Datoshojastpm4011Controller::class,'finalcheck'])->name('finalcheckTPM4011');
Route::get('/edit2TPM4011/{id}',[Datoshojastpm4011Controller::class,'edit2'])->name('edit2TPM4011');
Route::put('/update2TPM4011/{id}',[Datoshojastpm4011Controller::class,'update2'])->name('update2TPM4011');
Route::get('/pdfprintTPM4011',[Datoshojastpm4011Controller::class,'pdfprint'])->name('pdfprintTPM4011');
Route::get('/printindexTPM4011',[Datoshojastpm4011Controller::class,'printindex'])->name('printindexTPM4011');
Route::get('/printreversoTPM4011',[Reversotpm4011Controller::class,'printreverso'])->name('printreversoTPM4011');
Route::get('/pdfReversoTPM4011',[Reversotpm4011Controller::class,'pdfReverso'])->name('pdfReversoTPM4011');
//Rutas F7-TPM-ELE-60-L1-01
Route::resource('F7-TPM-ELE-60-L1-01-1', 'App\Http\Controllers\Datoshojastpm6011Controller');
Route::resource('reversoTPM6011', 'App\Http\Controllers\Reversotpm6011Controller');
Route::get('/checkTPM6011',[Datoshojastpm6011Controller::class,'check'])->name('checkTPM6011');
Route::put('/finalcheckTPM6011/{id}',[Datoshojastpm6011Controller::class,'finalcheck'])->name('finalcheckTPM6011');
Route::get('/edit2TPM6011/{id}',[Datoshojastpm6011Controller::class,'edit2'])->name('edit2TPM6011');
Route::put('/update2TPM6011/{id}',[Datoshojastpm6011Controller::class,'update2'])->name('update2TPM6011');
Route::get('/pdfprintTPM6011',[Datoshojastpm6011Controller::class,'pdfprint'])->name('pdfprintTPM6011');
Route::get('/printindexTPM6011',[Datoshojastpm6011Controller::class,'printindex'])->name('printindexTPM6011');
Route::get('/printreversoTPM6011',[Reversotpm6011Controller::class,'printreverso'])->name('printreversoTPM6011');
Route::get('/pdfReversoTPM6011',[Reversotpm6011Controller::class,'pdfReverso'])->name('pdfReversoTPM6011');
//Rutas F7-TPM-ELE-100-L1-01
Route::resource('F7-TPM-ELE-100-L1-01-1', 'App\Http\Controllers\Datoshojastpm10011Controller');
Route::resource('reversoTPM10011', 'App\Http\Controllers\Reversotpm10011Controller');
Route::get('/checkTPM10011',[Datoshojastpm10011Controller::class,'check'])->name('checkTPM10011');
Route::put('/finalcheckTPM10011/{id}',[Datoshojastpm10011Controller::class,'finalcheck'])->name('finalcheckTPM10011');
Route::get('/edit2TPM10011/{id}',[Datoshojastpm10011Controller::class,'edit2'])->name('edit2TPM10011');
Route::put('/update2TPM10011/{id}',[Datoshojastpm10011Controller::class,'update2'])->name('update2TPM10011');
Route::get('/pdfprintTPM10011',[Datoshojastpm10011Controller::class,'pdfprint'])->name('pdfprintTPM10011');
Route::get('/printindexTPM10011',[Datoshojastpm10011Controller::class,'printindex'])->name('printindexTPM10011');
Route::get('/printreversoTPM10011',[Reversotpm10011Controller::class,'printreverso'])->name('printreversoTPM10011');
Route::get('/pdfReversoTPM10011',[Reversotpm10011Controller::class,'pdfReverso'])->name('pdfReversoTPM10011');
//Rutas F7-TPM-ELE-107-L1-01
Route::resource('F7-TPM-ELE-107-L1-01-1', 'App\Http\Controllers\Datoshojastpm10711Controller');
Route::resource('reversoTPM10711', 'App\Http\Controllers\Reversotpm10711Controller');
Route::get('/checkTPM10711',[Datoshojastpm10711Controller::class,'check'])->name('checkTPM10711');
Route::put('/finalcheckTPM10711/{id}',[Datoshojastpm10711Controller::class,'finalcheck'])->name('finalcheckTPM10711');
Route::get('/edit2TPM10711/{id}',[Datoshojastpm10711Controller::class,'edit2'])->name('edit2TPM10711');
Route::put('/update2TPM10711/{id}',[Datoshojastpm10711Controller::class,'update2'])->name('update2TPM10711');
Route::get('/pdfprintTPM10711',[Datoshojastpm10711Controller::class,'pdfprint'])->name('pdfprintTPM10711');
Route::get('/printindexTPM10711',[Datoshojastpm10711Controller::class,'printindex'])->name('printindexTPM10711');
Route::get('/printreversoTPM10711',[Reversotpm10711Controller::class,'printreverso'])->name('printreversoTPM10711');
Route::get('/pdfReversoTPM10711',[Reversotpm10711Controller::class,'pdfReverso'])->name('pdfReversoTPM10711');
//Rutas F7-TPM-ELE-120-L1-01-1
Route::resource('F7-TPM-ELE-120-L1-01-1-1', 'App\Http\Controllers\Datoshojastpm120111Controller');
Route::resource('reversoTPM120111', 'App\Http\Controllers\Reversotpm120111Controller');
Route::get('/checkTPM120111',[Datoshojastpm120111Controller::class,'check'])->name('checkTPM120111');
Route::put('/finalcheckTPM120111/{id}',[Datoshojastpm120111Controller::class,'finalcheck'])->name('finalcheckTPM120111');
Route::get('/edit2TPM120111/{id}',[Datoshojastpm120111Controller::class,'edit2'])->name('edit2TPM120111');
Route::put('/update2TPM120111/{id}',[Datoshojastpm120111Controller::class,'update2'])->name('update2TPM120111');
Route::get('/pdfprintTPM120111',[Datoshojastpm120111Controller::class,'pdfprint'])->name('pdfprintTPM120111');
Route::get('/printindexTPM120111',[Datoshojastpm120111Controller::class,'printindex'])->name('printindexTPM120111');
Route::get('/printreversoTPM120111',[Reversotpm120111Controller::class,'printreverso'])->name('printreversoTPM120111');
Route::get('/pdfReversoTPM120111',[Reversotpm120111Controller::class,'pdfReverso'])->name('pdfReversoTPM120111');
//Rutas F7-TPM-ELE-120-L1-01-2
Route::resource('F7-TPM-ELE-120-L1-01-2-1', 'App\Http\Controllers\Datoshojastpm120121Controller');
Route::resource('reversoTPM120121', 'App\Http\Controllers\Reversotpm120121Controller');
Route::get('/checkTPM120121',[Datoshojastpm120121Controller::class,'check'])->name('checkTPM120121');
Route::put('/finalcheckTPM120121/{id}',[Datoshojastpm120121Controller::class,'finalcheck'])->name('finalcheckTPM120121');
Route::get('/edit2TPM120121/{id}',[Datoshojastpm120121Controller::class,'edit2'])->name('edit2TPM120121');
Route::put('/update2TPM120121/{id}',[Datoshojastpm120121Controller::class,'update2'])->name('update2TPM120121');
Route::get('/pdfprintTPM120121',[Datoshojastpm120121Controller::class,'pdfprint'])->name('pdfprintTPM120121');
Route::get('/printindexTPM120121',[Datoshojastpm120121Controller::class,'printindex'])->name('printindexTPM120121');
Route::get('/printreversoTPM120121',[Reversotpm120121Controller::class,'printreverso'])->name('printreversoTPM120121');
Route::get('/pdfReversoTPM120121',[Reversotpm120121Controller::class,'pdfReverso'])->name('pdfReversoTPM120121');
//Rutas F7-TPM-ELE-140-L1-01
Route::resource('F7-TPM-ELE-140-L1-01-1', 'App\Http\Controllers\Datoshojastpm14011Controller');
Route::resource('reversoTPM14011', 'App\Http\Controllers\Reversotpm14011Controller');
Route::get('/checkTPM14011',[Datoshojastpm14011Controller::class,'check'])->name('checkTPM14011');
Route::put('/finalcheckTPM14011/{id}',[Datoshojastpm14011Controller::class,'finalcheck'])->name('finalcheckTPM14011');
Route::get('/edit2TPM14011/{id}',[Datoshojastpm14011Controller::class,'edit2'])->name('edit2TPM14011');
Route::put('/update2TPM14011/{id}',[Datoshojastpm14011Controller::class,'update2'])->name('update2TPM14011');
Route::get('/pdfprintTPM14011',[Datoshojastpm14011Controller::class,'pdfprint'])->name('pdfprintTPM14011');
Route::get('/printindexTPM14011',[Datoshojastpm14011Controller::class,'printindex'])->name('printindexTPM14011');
Route::get('/printreversoTPM14011',[Reversotpm14011Controller::class,'printreverso'])->name('printreversoTPM14011');
Route::get('/pdfReversoTPM14011',[Reversotpm14011Controller::class,'pdfReverso'])->name('pdfReversoTPM14011');
//Rutas F7-TPM-ELE-160-L1-01
Route::resource('F7-TPM-ELE-160-L1-01-1', 'App\Http\Controllers\Datoshojastpm16011Controller');
Route::resource('reversoTPM16011', 'App\Http\Controllers\Reversotpm16011Controller');
Route::get('/checkTPM16011',[Datoshojastpm16011Controller::class,'check'])->name('checkTPM16011');
Route::put('/finalcheckTPM16011/{id}',[Datoshojastpm16011Controller::class,'finalcheck'])->name('finalcheckTPM16011');
Route::get('/edit2TPM16011/{id}',[Datoshojastpm16011Controller::class,'edit2'])->name('edit2TPM16011');
Route::put('/update2TPM16011/{id}',[Datoshojastpm16011Controller::class,'update2'])->name('update2TPM16011');
Route::get('/pdfprintTPM16011',[Datoshojastpm16011Controller::class,'pdfprint'])->name('pdfprintTPM16011');
Route::get('/printindexTPM16011',[Datoshojastpm16011Controller::class,'printindex'])->name('printindexTPM16011');
Route::get('/printreversoTPM16011',[Reversotpm16011Controller::class,'printreverso'])->name('printreversoTPM16011');
Route::get('/pdfReversoTPM16011',[Reversotpm16011Controller::class,'pdfReverso'])->name('pdfReversoTPM16011');
//Rutas F7-TPM-ELE-180-L1-01
Route::resource('F7-TPM-ELE-180-L1-01-1', 'App\Http\Controllers\Datoshojastpm18011Controller');
Route::resource('reversoTPM18011', 'App\Http\Controllers\Reversotpm18011Controller');
Route::get('/checkTPM18011',[Datoshojastpm18011Controller::class,'check'])->name('checkTPM18011');
Route::put('/finalcheckTPM18011/{id}',[Datoshojastpm18011Controller::class,'finalcheck'])->name('finalcheckTPM18011');
Route::get('/edit2TPM18011/{id}',[Datoshojastpm18011Controller::class,'edit2'])->name('edit2TPM18011');
Route::put('/update2TPM18011/{id}',[Datoshojastpm18011Controller::class,'update2'])->name('update2TPM18011');
Route::get('/pdfprintTPM18011',[Datoshojastpm18011Controller::class,'pdfprint'])->name('pdfprintTPM18011');
Route::get('/printindexTPM18011',[Datoshojastpm18011Controller::class,'printindex'])->name('printindexTPM18011');
Route::get('/printreversoTPM18011',[Reversotpm18011Controller::class,'printreverso'])->name('printreversoTPM18011');
Route::get('/pdfReversoTPM18011',[Reversotpm18011Controller::class,'pdfReverso'])->name('pdfReversoTPM18011');
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
