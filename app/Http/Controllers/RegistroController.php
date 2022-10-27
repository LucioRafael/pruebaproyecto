<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registros = new Registro();
        $registros->criterio = $request->get('criterio');
        $registros->d1 = $request->get('d1');
        $registros->d2 = $request->get('d2');
        $registros->d3 = $request->get('d3');
        $registros->d4 = $request->get('d4');
        $registros->d5 = $request->get('d5');
        $registros->d6 = $request->get('d6');
        $registros->d7 = $request->get('d7');
        $registros->d8 = $request->get('d8');
        $registros->d9 = $request->get('d9');
        $registros->d10 = $request->get('d10');
        $registros->d11 = $request->get('d11');
        $registros->d12 = $request->get('d12');
        $registros->d13 = $request->get('d13');
        $registros->d14 = $request->get('d14');
        $registros->d15 = $request->get('d15');
        $registros->d16 = $request->get('d16');
        $registros->d17 = $request->get('d17');
        $registros->d18 = $request->get('d18');
        $registros->d19 = $request->get('d19');
        $registros->d20 = $request->get('d20');
        $registros->d21 = $request->get('d21');
        $registros->d22 = $request->get('d22');
        $registros->d23 = $request->get('d23');
        $registros->d24 = $request->get('d24');
        $registros->d25 = $request->get('d25');
        $registros->d26 = $request->get('d26');
        $registros->d27 = $request->get('d27');
        $registros->d28 = $request->get('d28');
        $registros->d29 = $request->get('d29');
        $registros->d30 = $request->get('d30');
        $registros->d31 = $request->get('d31');
        $registros->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
