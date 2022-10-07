<?php

namespace App\Http\Controllers;


use App\Models\RegTerminacion;
use App\Models\Fincas;
use App\Models\Tapas;
use App\Models\Defectos;
use Illuminate\Http\Request;

class RegTerminacionController extends Controller
{
    public function index(){

        $regTerminacion = RegTerminacion::all();
        $fincas = Fincas::all();
        $Tapas = Tapas::all();
        $Defectos = Defectos::all();
        return view("paginas.regTerminacion", array("Tabla"=>$regTerminacion, "Fincas"=>$fincas, "Tapas"=>$Tapas, "Defectos" =>$Defectos));
        


    }
    public function store(Request $request){

        $filas =[

            "Fruta1" =>$request->input("tapasValor1"),
            "Cjs1" =>$request->input("cjs1"),
            "CjsRechazadas1" =>$request->input("cjsRechazadas1"),
            "Fruta2" =>$request->input("tapasValor2"),
            "Cjs2" =>$request->input("cjs2"),
            "CjsRechazadas2" =>$request->input("cjsRechazadas2"),
            "Fruta3" =>$request->input("tapasValor3"),
            "Cjs3" =>$request->input("cjs3"),
            "CjsRechazadas3" =>$request->input("cjsRechazadas3"),
            "Fruta4" =>$request->input("tapasValor4"),
            "Cjs4" =>$request->input("cjs4"),
            "CjsRechazadas4" =>$request->input("cjsRechazadas4"),


        ];
        $defectos =[
            
            "defecto1" =>$request->input("defectosLista1"),
            "valDefecto1" =>$request->input("defecto1"),
            "defecto2" =>$request->input("defectosLista2"),
            "valDefecto2" =>$request->input("defecto2"),
            "defecto3" =>$request->input("defectosLista3"),
            "valDefecto3" =>$request->input("defecto3"),


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
        
        $terminacion = new RegTerminacion;
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
        $terminacion->defectos = json_encode($defectos);
        $terminacion->cjsnal = $request->input("cjsnal");
        $terminacion->blsnacional = $request->input("blsnacional");
        $terminacion->klsnacional = $request->input("klsnacional");
        $terminacion->klspersonal = $request->input("klspersonal");
        $terminacion->klsfrpiso = $request->input("klsfrpiso");
        $terminacion->fruta = json_encode($filas);
        $terminacion->save();
        return redirect()->route('regTerminacion.index');


    }
}
