<?php

namespace App\Http\Controllers;

use App\Models\Tapas;
use Illuminate\Http\Request;

class TapasController extends Controller
{
    public function index(){

        $tapas = Tapas::all(); 
        return view("paginas.tapas", array("Tapas"=>$tapas));


    }

    // public function store(Request $request)
    // {
        
    //     $tapas = new Tapas;
    //     $tapas->fecha = $request->input('fecha');
    //     $tapas->servidor = $request->input("null");
    //     $tapas->finca = $request->input("Fincas");
    //     $tapas->arecorrida = $request->input("arecorrida");


    //     //    return  $embolse->embfinca = json_encode($embfinca1+$i);;

    //     return redirect()->route('regTerminacion.index');
    // }

}
