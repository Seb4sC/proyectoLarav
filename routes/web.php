<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\TallerController;
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
    return view('welcome');
});

Route::get('/curso/{num1}/{num2}',[CursoController::class,'hola'])->name('curso.show');
Route::get('/primo/{num1}',[TallerController::class,'esPrimo'])->name('primo.show');
Route::get('/amigo/{numero1}/{numero2}',[TallerController::class,'numAmigos'])->name('amigos.show');

