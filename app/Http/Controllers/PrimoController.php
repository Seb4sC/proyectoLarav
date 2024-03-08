<?php

namespace App\Http\Controllers;

use App\Models\Primo;
use Illuminate\Http\Request;

class PrimoController extends Controller
{
    public function formularioPrimo(){
        return view('frmPrimo');
    }

    public function storePrimo(Request $request){
        $primo = new Primo();
        $primo->numEval = $request->numEval;

        $numero = $request->numEval;
        $divisores = 0;
        for ($i=1; $i <= $numero; $i++) {
            if($numero%$i == 0){
                $divisores++;
            }
        }
        if ($divisores > 2) {
            $primo->result = "No es primo";
            $primo->save();
            return "No es primo";
        } else {
            $primo->result = "Es primo";
            $primo->save();
            return "Es primo";
        }
    }

    public function listar(){
        $primos = Primo::orderby('id')->get();
        return view('resultadoPrimo', compact('primos'));
    }
}
