<?php

namespace App\Http\Controllers;

use App\Models\Tabla;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function tabla(){

        $tabla = Tabla::all(); 
        return view("paginas.tabla", array("Tabla"=>$tabla));


    }
}
