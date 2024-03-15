<?php

namespace App\Http\Controllers;

use App\Models\Companias;
use Illuminate\Http\Request;

class CompaniasController extends Controller
{
    public function show(){
        return view('.examen.companias');
    }

    public function insertarDatos(Request $request){
        $compania = new Companias;
        $compania->actividad_principal = $request->actividad_principal;
        $compania->save();
        return view('.examen.companias');
    }
}
