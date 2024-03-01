<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function formularioProducto(){
        return view('frmProduct');
     }

     public function storeProducto(Request $request){

        $producto = new Product();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->save();
        return $producto;
     }
}
