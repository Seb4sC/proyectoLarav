<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TallerController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "principal";
});

// Route::get('/formulario',[TallerController::class,'createUno']);
// Route::post('/formulario',[TallerController::class,'storeUno'])->name('formulario.store');
// Route::get('/formulario2',[TallerController::class,'createDos']);
// Route::post('/formulario2',[TallerController::class,'storeDos'])->name('formularioAmigo.store');
// Route::get('/formulario3',[TallerController::class,'createTres']);
// Route::post('/formulario3',[TallerController::class,'storeTres'])->name('formularioPromedio.store');
// Route::get('/formulario4',[TallerController::class,'createCuatro']);
// Route::post('/formulario4',[TallerController::class,'storeCuatro'])->name('formularioCuadratica.store');


// Route::get('/todos', [TallerController::class, 'createTodos']);
// Route::post('/todos', [TallerController::class, 'storeTodos'])->name('todos.store');


Route::get('/frmProduct', [ProductController::class, 'formularioProducto']);
Route::post('/frmProduct', [ProductController::class, 'storeProducto'])->name('product.store');

Route::get('/frmService', [ServiceController::class, 'formularioServicio']);
Route::post('/frmService', [ServiceController::class, 'storeServicio'])->name('service.store');
//Route::get('/curso/{num1}/{num2}',[CursoController::class,'hola'])->name('curso.show');
//Route::get('/primo/{num1}',[TallerController::class,'esPrimo'])->name('primo.show');
//Route::get('/amigo/{numero1}/{numero2}',[TallerController::class,'numAmigos'])->name('amigos.show');

