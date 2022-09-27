<?php

namespace App\Http\Controllers;

use App\Models\Tabla;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function index(){

        $tabla = Tabla::all(); 
        return view("paginas.tabla", array("Tabla"=>$tabla));


    }
}
