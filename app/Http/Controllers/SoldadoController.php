<?php

namespace App\Http\Controllers;

use App\Models\Soldado;
use Illuminate\Http\Request;

class SoldadoController extends Controller
{
    public function show(){
        return view('examen.soldados');
    }

    public function insertarDatos(Request $request){
        $soldado = new Soldado;
        $soldado->nombre = $request->nombre;
        $soldado->apellidos = $request->apellidos;
        $soldado->grado = $request->grado;
        $soldado->save();
        return view('.examen.soldados');
    }
}
