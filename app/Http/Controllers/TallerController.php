<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function esPrimo($numero){
        $divisores = 0;
        for ($i=1; $i <= $numero; $i++) {
            if($numero%$i == 0){
                $divisores++;
            }
        }
        if ($divisores > 2) {
            return "No es primo";
        } else {
            return "Es primo";
        }
    }

    public function numAmigos($numero1, $numero2){
        $divNum1 = 0;
        $divNum2 = 0;

        for ($i=1; $i <= $numero1; $i++) {
            if($numero1%$i == 0){
                $divNum1 += $i;
            }
        }

        for ($i=1; $i <= $numero2; $i++) {
            if($numero2%$i == 0){
                $divNum2 += $i;
            }
        }

        if ($divNum1 === $divNum2) {
            return "Es amigo";
        } else {
            return "No es amigo";
        }
    }
}
