<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editar;


class EditarController extends Controller
{
    public function index(){

        $editar = Editar::all();
        return view("paginas.editar", array("editar"=>$editar));

    }

    public function update($id, Request $request){

        // $datos = array("finca"=>$request->input("finca"));

    }
}
