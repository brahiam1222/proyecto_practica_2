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
}
