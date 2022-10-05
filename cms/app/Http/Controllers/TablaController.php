<?php

namespace App\Http\Controllers;

use App\Models\Fincas;
use App\Models\Tabla;
use App\Models\Tapas;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function index(){

        $tabla = Tabla::all(); 
        $fincas = Fincas::all();
        $Tapas = Tapas::all();
        return view("paginas.tabla", array("Tabla"=>$tabla, "Fincas"=>$fincas, "Tapas"=>$Tapas));
        


    }
    public function store(Request $request){

        $fila =[
            "Fruta" =>$request->input("tapasValor"),
            "Cjs" =>$request->input("cjs"),
            "CjsRechazadas" =>$request->input("cjsRechazadas"),

        ];


        $dataRacimos = [
            'sem5'=>$request->input("sm5"),
            'sem6'=>$request->input("sm6"),
            'sem7'=>$request->input("sm7"),
            'sem8'=>$request->input("sm8"),
            'sem9'=>$request->input("sm9"),
            'sem10'=>$request->input("sm10"),
            'sem11'=>$request->input("sm11"),
            'sem12'=>$request->input("sm12"),
            'sem13'=>$request->input("sm13")
        ];
        $dataRepiques = [
            'sem5'=>$request->input("sm5"),
            'sem6'=>$request->input("sm6"),
            'sem7'=>$request->input("sm7"),
            'sem8'=>$request->input("sm8"),
            'sem9'=>$request->input("sm9"),
            'sem10'=>$request->input("sm10"),
            'sem11'=>$request->input("sm11"),
            'sem12'=>$request->input("sm12"),
            'sem13'=>$request->input("sm13")
        ];
        
        $terminacion = new Tabla;
        $terminacion->fecha = $request->input('fecha');
        $terminacion->servidor = $request->input("null");
        $terminacion->finca = $request->input("Fincas");
        $terminacion->arecorrida = $request->input("arecorrida");
        $terminacion->cjsestimadas = $request->input("cjsestimadas");
        $terminacion->pempaca = $request->input("pempacadora");
        $terminacion->pcampo = $request->input("pcampo");
        $terminacion->cmano = $request->input("calibre");
        $terminacion->racimoscortados = json_encode($dataRacimos);
        $terminacion->racimosrepicados = json_encode($dataRepiques);
        $terminacion->defectos = $request->input("sm6");
        $terminacion->cjsnal = $request->input("sm5");
        $terminacion->blsnacional = $request->input("sm5");
        $terminacion->klsnacional = $request->input("sm5");
        $terminacion->klspersonal = $request->input("sm5");
        $terminacion->klsfrpiso = $request->input("sm5");
        $terminacion->fruta = json_encode($fila);
        $terminacion->save();
        return redirect()->route('tabla.index');


    }
}
