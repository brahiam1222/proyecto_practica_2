<?php

namespace App\Http\Controllers;

use App\Models\Raiz;
use Illuminate\Http\Request;

class RaizController extends Controller
{
    public function index(){

        $inicio = Raiz::all(); 
        return view("paginas.raiz", array("inicio"=>$inicio));


    }
}
