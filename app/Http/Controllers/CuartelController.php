<?php

namespace App\Http\Controllers;

use App\Models\Cuartel;
use Illuminate\Http\Request;

class CuartelController extends Controller
{
    public function show(){
        return view('.examen.cuarteles');
    }

    public function insertarDatos(Request $request){
        $cuartel = new Cuartel;
        $cuartel->nombre = $request->nombre;
        $cuartel->ubicacion = $request->ubicacion;
        $cuartel->save();
        return view('.examen.cuarteles');
    }
}
