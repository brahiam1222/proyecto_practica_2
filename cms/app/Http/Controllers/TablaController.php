<?php

namespace App\Http\Controllers;

use App\Models\Tabla;
// use App\Models\Fincas;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function index(){

        $tabla = Tabla::all(); 
        return view("paginas.tabla", array("Tabla"=>$tabla));


    }
    public function store(Request $request){

        $terminacion = new Tabla;
        $terminacion->fecha = $request->input('fecha');
        $terminacion->servidor = $request->input("null");
        $terminacion->finca = $request->input("Fincas");
        $terminacion->arecorrida = $request->input("arecorrida");
        $terminacion->cjsestimadas = $request->input("cjsestimadas");
        $terminacion->pempaca = $request->input("pempacadora");
        $terminacion->pcampo = $request->input("pcampo");
        $terminacion->cmano = $request->input("calibre");
        $terminacion->racimoscortados = $request->input("regisRacimos");
        $terminacion->racimosrepicados = $request->input("null");
        $terminacion->defectos = $request->input("null");
        $terminacion->cjsnal = $request->input("null");
        $terminacion->blsnacional = $request->input("null");
        $terminacion->klsnacional = $request->input("null");
        $terminacion->klspersonal = $request->input("null");
        $terminacion->klsfrpiso = $request->input("null");
        $terminacion->fruta = $request->input("null");
        $terminacion->save();
        return redirect()->route('tabla.index');


    }
}
