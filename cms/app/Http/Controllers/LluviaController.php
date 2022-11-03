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


        $Lluvias1 = [

            "fechaMm0" => $request->input("fechaMm0"),
            "fincasMm0" => $request->input("fincasMm0"),
            "mm0" => $request->input("mm0"),

        ];
        $Lluvias2 = [

            "fechaMm1" => $request->input("fechaMm1"),
            "fincasMm1" => $request->input("fincasMm1"),
            "mm1" => $request->input("mm1"),

        ];
        $Lluvias3 = [

            "fechaMm2" => $request->input("fechaMm2"),
            "fincasMm2" => $request->input("fincasMm2"),
            "mm2" => $request->input("mm2"),

        ];
        $Lluvias4 = [

            "fechaMm3" => $request->input("fechaMm3"),
            "fincasMm3" => $request->input("fincasMm3"),
            "mm3" => $request->input("mm3"),

        ];
        $Lluvias5 = [

            "fechaMm4" => $request->input("fechaMm4"),
            "fincasMm4" => $request->input("fincasMm4"),
            "mm4" => $request->input("mm4"),

        ];




        // $Lluvias =[

        //     "fechaMm0" => $request->input("fechaMm0"),
        //     "fincasMm0" => $request->input("fincasMm0"),
        //     "mm0" => $request->input("mm0"),
        //     "fechaMm1" => $request->input("fechaMm1"),
        //     "fincasMm1" => $request->input("fincasMm1"),
        //     "mm1" => $request->input("mm1"),
        //     "fechaMm2" => $request->input("fechaMm2"),
        //     "fincasMm2" => $request->input("fincasMm2"),
        //     "mm2" => $request->input("mm2"),
        //     "fechaMm3" => $request->input("fechaMm3"),
        //     "fincasMm3" => $request->input("fincasMm3"),
        //     "mm3" => $request->input("mm3"),
        //     "fechaMm4" => $request->input("fechaMm4"),
        //     "fincasMm4" => $request->input("fincasMm4"),
        //     "mm4" => $request->input("mm4"),

        // ];

        



        $lluvia = new Lluvia;
        $lluvia1 = new Lluvia;
        $lluvia2 = new Lluvia;
        $lluvia3 = new Lluvia;
        $lluvia4 = new Lluvia;

        
        $lluvia->fechaMm = $request->input("fechaMm0");
        $lluvia->fincasMm = $request->input("fincasMm0");
        $lluvia->mm = $request->input("mm0");
        $lluvia->save();


        $lluvia1->fechaMm = $request->input("fechaMm1");
        $lluvia1->fincasMm = $request->input("fincasMm1");
        $lluvia1->mm = $request->input("mm1");
        $lluvia1->save();

        $lluvia2->fechaMm = $request->input("fechaMm2");
        $lluvia2->fincasMm = $request->input("fincasMm2");
        $lluvia2->mm = $request->input("mm2");
        $lluvia2->save();

        $lluvia3->fechaMm = $request->input("fechaMm3");
        $lluvia3->fincasMm = $request->input("fincasMm3");
        $lluvia3->mm = $request->input("mm3");
        $lluvia3->save();

        $lluvia4->fechaMm = $request->input("fechaMm4");
        $lluvia4->fincasMm = $request->input("fincasMm4");
        $lluvia4->mm = $request->input("mm4");
        $lluvia4->save();

        
        // $lluvia = new Lluvia
        // $lluvia->datos = json_encode($Lluvias);
        // $lluvia->save();


        return redirect()->route('regTerminacion.index');



    }
}
