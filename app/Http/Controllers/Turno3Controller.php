<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno3;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Turno3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turno3s = Turno3::all();
        return view('turno.3.index')->with('turno3s',$turno3s);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turno.3.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno3s = new Turno3();        
        $turno3s->DocumentoID = $request->get('documentoid');
        $turno3s->Titulo = $request->get('titulo');
        $turno3s->Operacion = $request->get('operacion');
        $turno3s->Descripcion = $request->get('descripcion');
        $turno3s->Numero =$request->get('numero');
        $turno3s->Ruta = $request->get('ruta');

        $turno3s->save();

        return redirect('/Turno3');
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
        $turno3 = Turno3::find($id);
        return view('turno.3.edit')->with('turno3',$turno3);
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
        $turno3 = Turno3::find($id);
        $turno3->DocumentoID = $request->get('documentoid');
        $turno3->Titulo = $request->get('titulo');
        $turno3->Operacion = $request->get('operacion');
        $turno3->Descripcion = $request->get('descripcion');
        $turno3->Numero =$request->get('numero');
        $turno3->Ruta = $request->get('ruta');
        $turno3->save();

        return redirect('/Turno3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turno3 = Turno3::find($id);
        $turno3->delete();
        return redirect('/Turno3');
    }
}
