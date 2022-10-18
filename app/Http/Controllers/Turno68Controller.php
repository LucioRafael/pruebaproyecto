<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Turno68;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Turno68Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.index')->with('turno68s',$turno68s);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turno.6-8.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno68s = new Turno68();
        $turno68s->DocumentoID = $request->get('documentoid');
        $turno68s->Titulo = $request->get('titulo');
        $turno68s->Operacion = $request->get('operacion');
        $turno68s->Descripcion = $request->get('descripcion');
        $turno68s->Numero =$request->get('numero');
        $turno68s->Ruta = $request->get('ruta');

        $turno68s->save();

        return redirect('/Turno68');
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
        $turno68 = Turno68::find($id);
        return view('turno.6-8.edit')->with('turno68',$turno68);
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
        $turno68 = Turno68::find($id);

        $turno68->DocumentoID = $request->get('documentoid');
        $turno68->Titulo = $request->get('titulo');
        $turno68->Operacion = $request->get('operacion');
        $turno68->Descripcion = $request->get('descripcion');
        $turno68->Numero =$request->get('numero');
        $turno68->Ruta = $request->get('ruta');

        $turno68->save();

        return redirect('/Turno68');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turno68 = Turno68::find($id);
        $turno68->delete();
        return redirect('/Turno68');
    }
}

