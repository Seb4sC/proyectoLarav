<?php

namespace App\Http\Controllers;

use App\Models\Cuadratica;
use Illuminate\Http\Request;

class CuadraticaController extends Controller
{
    public function formularioCuadratica(){
        return view('frmCuadratica');
    }

    public function storeCuadratica(Request $request){
        $cuadratica = new Cuadratica;
        $cuadratica->a = $request->a;
        $cuadratica->b = $request->b;
        $cuadratica->c = $request->c;

        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        $aux = (pow($b, 2) - (4*$a*$c));
        if ($a == 0 || $aux < 0){
            return "No se puede calcular. Ingresaste algún dato no válido";
        } else {
            $x1 = round(((($b*-1) + sqrt($aux)) / 2 * $a),2);
            $cuadratica->x1 = $x1;
            $x2 = round((($b*-1) - sqrt($aux) / 2 * $a),2);
            $cuadratica->x2 = $x2;
            $cuadratica->save();
            return [$x1, $x2];
        }
    }

    public function listar(){
        $cuadraticas = Cuadratica::orderby('id')->get();
        return;
    }
}
