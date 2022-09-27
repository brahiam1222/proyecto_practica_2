<?php

namespace App\Http\Controllers;

use App\Models\Fincas;
use Illuminate\Http\Request;

class FincasController extends Controller
{
    public function index(){

        $fincas = Fincas::all(); 
        return view("paginas.fincas", array("fincas"=>$fincas));


    }
}
