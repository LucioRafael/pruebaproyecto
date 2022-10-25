<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatoshojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $datoshojas = new Datoshoja();
        $datoshojas->titulo = $request->get('titulo');
        $datoshojas->subtitulo = $request->get('subtitulo');
        $datoshojas->documentoid = $request->get('documentoid');
        $datoshojas->numero_cambio = $request->get('numero_cambio');
        $datoshojas->fecha = $request->get('fecha');
        $datoshojas->revision = $request->get('Revision');
        $datoshojas->meie = $request ->get('meie');
        $datoshojas->calidad = $request ->get('calidad');
        $datoshojas->manufactura = $request ->get('manufactura');
        $datoshojas->area = $request ->get('area');
        $datoshojas->linea = $request ->get('linea');
        $datoshojas->operacion = $request ->get('operacion');
        $datoshojas->lugar = $request ->get('lugar');
        $datoshojas->planta = $request ->get('planta');
        $datoshojas->departamento = $request ->get('departamento');
        $datoshojas->pagina = $request ->get('pagina');
        $datoshojas->numeroparte = $request ->get('pagina');
        $datoshojas->mes = $request ->get('mes');
        $datoshojas->año = $request ->get('año');
        $datoshojas->save();
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
