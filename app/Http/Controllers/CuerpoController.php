<?php

namespace App\Http\Controllers;

use App\Models\Cuerpo;
use Illuminate\Http\Request;

class CuerpoController extends Controller
{
    public function show(){
        return view('.examen.cuerpos_ejercito');
    }

    public function insertarDatos(Request $request){
        $cuerpo = new Cuerpo;
        $cuerpo->denominacion = $request->denominacion;
        $cuerpo->save();
        return view('.examen.cuerpos_ejercito');
    }
}
