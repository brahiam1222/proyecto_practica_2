<?php

namespace App\Http\Controllers;

use App\Models\Fincas;
use App\Models\Embolse;
use Illuminate\Http\Request;

class EmbolseController extends Controller
{

    public function index()
    {

        $fincas = Fincas::all();
        $embolse = Embolse::all();
        return view("paginas.embolse", array("Fincas" => $fincas, "Embolse" => $embolse));
    }

    public function store(Request $request)
    {
        $embfinca1 = [

            "totalEmb0" => $request->input("totalEmb0"),
            "destinoEmb0" => $request->input("destinoEmb0"),
            "colorEmb0" => $request->input("colorEmb0"),

        ];
        $embfinca2 = [

            "totalEmb1" => $request->input("totalEmb1"),
            "destinoEmb1" => $request->input("destinoEmb1"),
            "colorEmb1" => $request->input("colorEmb1"),

        ];
        $embfinca3 = [

            "totalEmb2" => $request->input("totalEmb2"),
            "destinoEmb2" => $request->input("destinoEmb2"),
            "colorEmb2" => $request->input("colorEmb2"),

        ];
        $embfinca4 = [

            "totalEmb3" => $request->input("totalEmb3"),
            "destinoEmb3" => $request->input("destinoEmb3"),
            "colorEmb3" => $request->input("colorEmb3"),

        ];
        $embfinca5 = [

            "totalEmb4" => $request->input("totalEmb4"),
            "destinoEmb4" => $request->input("destinoEmb4"),
            "colorEmb4" => $request->input("colorEmb4"),

        ];





        $embolse = new Embolse;
        $embolse1 = new Embolse;
        $embolse2 = new Embolse;
        $embolse3 = new Embolse;
        $embolse4 = new Embolse;

        
        $embolse->fechaEmb = $request->input("fechaEmb");
        $embolse->semanaEmb = $request->input("semanaEmb");
        $embolse->embfinca = $request->input("fincasEmb0");
        $embolse->embdatos = json_encode($embfinca1);
        $embolse->save();


        $embolse1->fechaEmb = $request->input("fechaEmb");
        $embolse1->semanaEmb = $request->input("semanaEmb");
        $embolse1->embfinca = $request->input("fincasEmb1");
        $embolse1->embdatos = json_encode($embfinca2);
        $embolse1->save();

        $embolse2->fechaEmb = $request->input("fechaEmb");
        $embolse2->semanaEmb = $request->input("semanaEmb");
        $embolse2->embfinca = $request->input("fincasEmb2");
        $embolse2->embdatos = json_encode($embfinca3);
        $embolse2->save();

        $embolse3->fechaEmb = $request->input("fechaEmb");
        $embolse3->semanaEmb = $request->input("semanaEmb");
        $embolse3->embfinca = $request->input("fincasEmb3");
        $embolse3->embdatos = json_encode($embfinca4);
        $embolse3->save();

        $embolse4->fechaEmb = $request->input("fechaEmb");
        $embolse4->semanaEmb = $request->input("semanaEmb");
        $embolse4->embfinca = $request->input("fincasEmb4");
        $embolse4->embdatos = json_encode($embfinca5);
        $embolse4->save();


        //    return  $embolse->embfinca = json_encode($embfinca1+$i);;

        return redirect()->route('regTerminacion.index');
    }
}
