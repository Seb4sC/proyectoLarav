<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function show(){
        return view('.examen.servicios');
    }

    public function insertarDatos(Request $request){
        $servicio = new Servicio;
        $servicio->actividad = $request->actividad;
        $servicio->save();
        return view('.examen.servicios');
    }
}
