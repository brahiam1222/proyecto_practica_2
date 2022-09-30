<?php

namespace App\Http\Controllers;

use App\Models\Raiz;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class RaizController extends Controller
{
    public function index(){

        $inicio = Raiz::all(); 
        return view("paginas.raiz", array("inicio"=>$inicio));


    }
    // public function terminacion(){
    //     // $terminacion = Raiz::all(); 
    //     // // $terminacion->fecha;
    //     // return; view("paginas.raiz", array("Fecha"=>$terminacion));

    // }
}
