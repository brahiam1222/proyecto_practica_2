<?php

namespace App\Http\Controllers;


use App\Models\RegTerminacion;
use App\Models\Fincas;
use App\Models\Tapas;
use App\Models\Tabla;
use App\Models\Defectos;
use Illuminate\Http\Request;

class RegTerminacionController extends Controller
{
    public function index()
    {

        $regTerminacion = RegTerminacion::all();
        $fincas = Fincas::all();
        $Tapas = Tapas::all();
        $Defectos = Defectos::all();
        return view("paginas.regTerminacion", array("Tabla" => $regTerminacion, "Fincas" => $fincas, "Tapas" => $Tapas, "Defectos" => $Defectos));
    }
    public function store(Request $request)
    {

        $filas = [

            "Fruta1" => $request->input("tapasValor1"),
            "Cjs1" => $request->input("cjs1"),
            "CjsRechazadas1" => $request->input("cjsRechazadas1"),
            "Fruta2" => $request->input("tapasValor2"),
            "Cjs2" => $request->input("cjs2"),
            "CjsRechazadas2" => $request->input("cjsRechazadas2"),
            "Fruta3" => $request->input("tapasValor3"),
            "Cjs3" => $request->input("cjs3"),
            "CjsRechazadas3" => $request->input("cjsRechazadas3"),
            "Fruta4" => $request->input("tapasValor4"),
            "Cjs4" => $request->input("cjs4"),
            "CjsRechazadas4" => $request->input("cjsRechazadas4"),


        ];
        $defectos = [

            "defecto1" => $request->input("defectosLista1"),
            "valDefecto1" => $request->input("defecto1"),
            "defecto2" => $request->input("defectosLista2"),
            "valDefecto2" => $request->input("defecto2"),
            "defecto3" => $request->input("defectosLista3"),
            "valDefecto3" => $request->input("defecto3"),


        ];


        $dataRacimos = [
            'sem5' => $request->input("sm5"),
            'sem6' => $request->input("sm6"),
            'sem7' => $request->input("sm7"),
            'sem8' => $request->input("sm8"),
            'sem9' => $request->input("sm9"),
            'sem10' => $request->input("sm10"),
            'sem11' => $request->input("sm11"),
            'sem12' => $request->input("sm12"),
            'sem13' => $request->input("sm13"),
            'rechazo' => $request->input("rechazo")
        ];
        $dataRepiques = [
            'Rsem5' => $request->input("Rsm5"),
            'Rsem6' => $request->input("Rsm6"),
            'Rsem7' => $request->input("Rsm7"),
            'Rsem8' => $request->input("Rsm8"),
            'Rsem9' => $request->input("Rsm9"),
            'Rsem10' => $request->input("Rsm10"),
            'Rsem11' => $request->input("Rsm11"),
            'Rsem12' => $request->input("Rsm12"),
            'Rsem13' => $request->input("Rsm13")
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

    public function edit($id)
    {

        // $datos = array("finca"=>$request->input("finca"));
        $termi = Tabla::findOrFail($id);
        $regTerminacion = RegTerminacion::all();
        $Fincas = Fincas::all();
        $Tapas = Tapas::all();
        $Defectos = Defectos::all();
        return view('paginas.editar', compact('termi', 'regTerminacion', 'Fincas', 'Tapas', 'Defectos'));
        // echo '<pre>'; print_r($datos); echo '</pre>';
        // echo '<pre>'; print_r($id); echo '</pre>';
        // return $termi;

    }
    public function update(Request $request, $id)
    {


        $filas = [

            "Fruta1" => $request->input("tapasValor1"),
            "Cjs1" => $request->input("cjs1"),
            "CjsRechazadas1" => $request->input("cjsRechazadas1"),
            "Fruta2" => $request->input("tapasValor2"),
            "Cjs2" => $request->input("cjs2"),
            "CjsRechazadas2" => $request->input("cjsRechazadas2"),
            "Fruta3" => $request->input("tapasValor3"),
            "Cjs3" => $request->input("cjs3"),
            "CjsRechazadas3" => $request->input("cjsRechazadas3"),
            "Fruta4" => $request->input("tapasValor4"),
            "Cjs4" => $request->input("cjs4"),
            "CjsRechazadas4" => $request->input("cjsRechazadas4"),


        ];
        $defectos = [

            "defecto1" => $request->input("defectosLista1"),
            "valDefecto1" => $request->input("defecto1"),
            "defecto2" => $request->input("defectosLista2"),
            "valDefecto2" => $request->input("defecto2"),
            "defecto3" => $request->input("defectosLista3"),
            "valDefecto3" => $request->input("defecto3"),


        ];


        $dataRacimos = [
            'sem5' => $request->input("sm5"),
            'sem6' => $request->input("sm6"),
            'sem7' => $request->input("sm7"),
            'sem8' => $request->input("sm8"),
            'sem9' => $request->input("sm9"),
            'sem10' => $request->input("sm10"),
            'sem11' => $request->input("sm11"),
            'sem12' => $request->input("sm12"),
            'sem13' => $request->input("sm13"),
            'rechazo' => $request->input("rechazo"),
        ];
        $dataRepiques = [
            'Rsem5' => $request->input("Rsm5"),
            'Rsem6' => $request->input("Rsm6"),
            'Rsem7' => $request->input("Rsm7"),
            'Rsem8' => $request->input("Rsm8"),
            'Rsem9' => $request->input("Rsm9"),
            'Rsem10' => $request->input("Rsm10"),
            'Rsem11' => $request->input("Rsm11"),
            'Rsem12' => $request->input("Rsm12"),
            'Rsem13' => $request->input("Rsm13"),
        ];

        $termi = Tabla::findOrFail($id);
        $termi->fecha = $request->input("fecha");
        $termi->servidor = $request->input("null");
        $termi->finca = $request->input("Fincas");
        $termi->arecorrida = $request->input("arecorrida");
        $termi->cjsestimadas = $request->input("cjsestimadas");
        $termi->pempaca = $request->input("pempacadora");
        $termi->pcampo = $request->input("pcampo");
        $termi->cmano = $request->input("calibre");
        $termi->racimoscortados = json_encode($dataRacimos);
        $termi->racimosrepicados = json_encode($dataRepiques);
        $termi->defectos = json_encode($defectos);
        $termi->cjsnal = $request->input("cjsnal");
        $termi->blsnacional = $request->input("blsnacional");
        $termi->klsnacional = $request->input("klsnacional");
        $termi->klspersonal = $request->input("klspersonal");
        $termi->klsfrpiso = $request->input("klsfrpiso");
        $termi->fruta = json_encode($filas);
        $termi->save();
        return redirect()->route('tabla.index');

            
       print( $request);
    }
}
