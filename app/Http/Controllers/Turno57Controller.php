<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Turno57;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Turno57Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.index')->with('turno57s',$turno57s);

    }

    public function borrarRegistros() {
        
        DB::table('registros')->update(['d1' => '-', 'd2' => '-', 'd3' => '-', 'd4' => '-', 'd5' => '-', 'd6' => '-', 
        'd7' => '-', 'd8' => '-', 'd9' => '-', 'd10' => '-', 'd11' => '-', 'd12'  => '-', 'd13'  => '-', 'd14'  => '-'
        , 'd15'  => '-', 'd16'  => '-', 'd17'  => '-', 'd18'  => '-', 'd19'  => '-', 'd20'  => '-', 'd21'  => '-', 'd22'  => '-'
        , 'd23'  => '-', 'd24'  => '-', 'd25'  => '-', 'd26'  => '-', 'd27'  => '-', 'd28'  => '-', 'd29'  => '-', 'd30'  => '-'
        , 'd31'  => '-']);
            return redirect ('/Turno1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turno.5-7.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno57s = new Turno57();
        $turno57s->DocumentoID = $request->get('documentoid');
        $turno57s->Titulo = $request->get('titulo');
        $turno57s->Operacion = $request->get('operacion');
        $turno57s->Descripcion = $request->get('descripcion');
        $turno57s->Numero =$request->get('numero');
        $turno57s->Ruta = $request->get('ruta');

        $turno57s->save();

        return redirect('/Turno1');
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
        $turno57 = Turno57::find($id);
        return view('turno.5-7.edit')->with('turno57',$turno57);
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
        $turno57 = Turno57::find($id);
        $turno57->DocumentoID = $request->get('documentoid');
        $turno57->Titulo = $request->get('titulo');
        $turno57->Operacion = $request->get('operacion');
        $turno57->Descripcion = $request->get('descripcion');
        $turno57->Numero =$request->get('numero');
        $turno57->Ruta = $request->get('ruta');
        $turno57->save();

        return redirect('/Turno1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turno57 = Turno57::find($id);
        $turno57->delete();
        return redirect('/Turno1');
    }
}
