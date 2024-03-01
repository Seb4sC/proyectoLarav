<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function formularioServicio(){
        return view('frmService');
    }

    public function storeServicio(Request $request){
        $service = new Service();
        $service->nombre = $request->nombre;
        $service->precio = $request->precio;
        $service->save();
        return $service;
    }
}
