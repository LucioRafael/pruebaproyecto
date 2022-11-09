<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Datoshoja;
use App\Models\Registro;
use App\Models\option;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DatoshojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        $options = option::all();
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-20-L1-01.index')
        ->with('registros',$registros)
        ->with('datoshojas',$datoshojas)
        ->with('options', $options);
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
    public function create2()
    {


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
        $datoshojas->revision = $request->get('revision');
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
        $datoshojas->numeroparte = $request ->get('numeroparte');
        $datoshojas->mes = $request ->get('mes');
        $datoshojas->año = $request ->get('año');
        $datoshojas->save();
    }
    public function store2()
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
        $registros->turno = $request->get('turno');
        $registros->documentoid = $request->get('documentoid');
        $registros->partetabla = $request->get('partetabla');
        $registros->save();
        return redirect ('/F7-SETCS-ELE-CR-L1-01-57');
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
    public function show2($id)
    {

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
    public function edit2($id)
    {

    }
    public function check(Request $request)
    {
        $datoshojas = Datoshoja::all();
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
        $registros->turno = $request->get('turno');
        $registros->documentoid = $request->get('documentoid');
        $registros->partetabla = $request->get('partetabla');
        $registros->save();
        return redirect ('/F7-SETCS-ELE-CR-L1-01-57');
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

    public function update2(Request $request, $id)
    {

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

    public function destroy2($id)
    {

    }
}
