<?php

use App\Http\Controllers\CompaniasController;
use App\Http\Controllers\CuadraticaController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\CuerpoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PrimoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SoldadoController;
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
    return view('home');
});

// Route::get('/formularioPrimo',[TallerController::class,'createUno']);
// Route::post('/formularioPrimo',[TallerController::class,'storeUno'])->name('formularioPrimo.store');
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

Route::get('/frmPrimo', [PrimoController::class, 'formularioPrimo'])->name('primo.show');
Route::post('/frmPrimo', [PrimoController::class, 'storePrimo'])->name('primo.store');
Route::get('/listaPrimos', [PrimoController::class, 'listar'])->name('listaPrimos.show');


Route::get('/frmCuadratica', [CuadraticaController::class, 'formularioCuadratica'])->name('cuadratica.show');
Route::post('/frmCuadratica', [CuadraticaController::class, 'storeCuadratica'])->name('cuadratica.store');
Route::get('/listaCuadraticas', [CuadraticaController::class, 'listar']);



// Rutas get y post de examen 15/03/2024
Route::get('/soldado', [SoldadoController::class, 'show'])->name('soldado.show');
Route::post('/soldado', [SoldadoController::class, 'insertarDatos'])->name('soldado.store');

Route::get('/cuartel', [CuartelController::class, 'show'])->name('cuartel.show');
Route::post('/cuartel', [CuartelController::class, 'insertarDatos'])->name('cuartel.store');

Route::get('/cuerpoEjercito', [CuerpoController::class, 'show'])->name('cuerpo.show');
Route::post('/cuerpoEjercito', [CuerpoController::class, 'insertarDatos'])->name('cuerpo.store');

Route::get('/compania', [CompaniasController::class, 'show'])->name('compania.show');
Route::post('/compania', [CompaniasController::class, 'insertarDatos'])->name('compania.store');

Route::get('/servicio', [ServicioController::class, 'show'])->name('servicio.show');
Route::post('/servicio', [ServicioController::class, 'insertarDatos'])->name('servicio.store');
