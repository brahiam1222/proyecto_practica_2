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

            "fincasEmb0" => $request->input("fincasEmb0"),
            "totalEmb0" => $request->input("totalEmb0"),
            "destinoEmb0" => $request->input("destinoEmb0"),
            "colorEmb0" => $request->input("colorEmb0"),
        
        ];
        $embfinca2 = [

            "fincasEmb1" => $request->input("fincasEmb1"),
            "totalEmb1" => $request->input("totalEmb1"),
            "destinoEmb1" => $request->input("destinoEmb1"),
            "colorEmb1" => $request->input("colorEmb1"),
        
        ];
        $embfinca3 = [

            "fincasEmb2" => $request->input("fincasEmb2"),
            "totalEmb2" => $request->input("totalEmb2"),
            "destinoEmb2" => $request->input("destinoEmb2"),
            "colorEmb2" => $request->input("colorEmb2"),
        
        ];
        $embfinca4 = [

            "fincasEmb3" => $request->input("fincasEmb3"),
            "totalEmb3" => $request->input("totalEmb3"),
            "destinoEmb3" => $request->input("destinoEmb3"),
            "colorEmb3" => $request->input("colorEmb3"),
        
        ];
        $embfinca5 = [

            "fincasEmb4" => $request->input("fincasEmb4"),
            "totalEmb4" => $request->input("totalEmb4"),
            "destinoEmb4" => $request->input("destinoEmb4"),
            "colorEmb4" => $request->input("colorEmb4"),
        
        ];



        for ($i=0; $i < 6; $i++) { 

            $embolse = new Embolse;
            $embolse->fechaEmb = $request->input("fechaEmb");
            $embolse->semanaEmb = $request->input("semanaEmb");
            $embolse->embfinca = json_encode($embfinca1);
            $embolse->save();
        }

        // $embolse->fechaEmb = $request->input("fechaEmb");
        // $embolse->semanaEmb = $request->input("semanaEmb");
        // $embolse->embfinca = json_encode($embfinca2);
        // $embolse->save();

        // $embolse->fechaEmb = $request->input("fechaEmb");
        // $embolse->semanaEmb = $request->input("semanaEmb");
        // $embolse->embfinca = json_encode($embfinca3);
        // $embolse->save();

        // $embolse->fechaEmb = $request->input("fechaEmb");
        // $embolse->semanaEmb = $request->input("semanaEmb");
        // $embolse->embfinca = json_encode($embfinca4);
        // $embolse->save();
        
        // $embolse->fechaEmb = $request->input("fechaEmb");
        // $embolse->semanaEmb = $request->input("semanaEmb");
        // $embolse->embfinca = json_encode($embfinca5);
        // $embolse->save();

        
    //    return  $embolse->embfinca = json_encode($embfinca1+$i);;
        
        // return redirect()->route('regTerminacion.index');
    }

}
