<?php

namespace App\Http\Controllers;


use App\Models\RegTerminacion;
use Illuminate\Http\Request;

class RegTerminacionController extends Controller
{
    public function RegTerminacion(){

        $regTerminacion = RegTerminacion::all(); 
        return view("paginas.regTerminacion", array("regTerminacion"=>$regTerminacion));


    }
}
