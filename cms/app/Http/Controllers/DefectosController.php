<?php

namespace App\Http\Controllers;

use App\Models\Defectos;
use Illuminate\Http\Request;

class DefectosController extends Controller
{
    public function defectos(){

        $defectos = Defectos::all(); 
        return view("paginas.defectos", array("Defectos"=>$defectos));


    }
}
