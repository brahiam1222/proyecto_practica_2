<?php

namespace App\Http\Controllers;


use App\Models\Fincas;
use App\Models\Lluvia;
use Illuminate\Http\Request;

class LluviaController extends Controller
{
    public function index()
    {

        $fincas = Fincas::all();
        $lluvia = Lluvia::all();
        return view("paginas.lluvias", array("Fincas" => $fincas, "Lluvia" => $lluvia));
    }

    public function store(Request $request)
    {
        $Lluvias =[

            "fechaMm0" => $request->input("fechaMm0"),
            "fincasMm0" => $request->input("fincasMm0"),
            "mm0" => $request->input("mm0"),
            "fechaMm1" => $request->input("fechaMm1"),
            "fincasMm1" => $request->input("fincasMm1"),
            "mm1" => $request->input("mm1"),
            "fechaMm2" => $request->input("fechaMm2"),
            "fincasMm2" => $request->input("fincasMm2"),
            "mm2" => $request->input("mm2"),
            "fechaMm3" => $request->input("fechaMm3"),
            "fincasMm3" => $request->input("fincasMm3"),
            "mm3" => $request->input("mm3"),
            "fechaMm4" => $request->input("fechaMm4"),
            "fincasMm4" => $request->input("fincasMm4"),
            "mm4" => $request->input("mm4"),

        ];

        

        
        $lluvia = new Lluvia;
        $lluvia->datos = json_encode($Lluvias);
        $lluvia->save();


        return $Lluvias;



    }
}
