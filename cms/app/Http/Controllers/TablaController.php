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
        $terminacion->finca = $request->input("null");
        $terminacion->arecorrida = $request->input("null");
        $terminacion->cjsestimadas = $request->input("null");
        $terminacion->pempaca = $request->input("null");
        $terminacion->pcampo = $request->input("null");
        $terminacion->cmano = $request->input("null");
        $terminacion->racimoscortados = $request->input("null");
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
