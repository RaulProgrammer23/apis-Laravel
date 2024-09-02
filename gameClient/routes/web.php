<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaControllerController;
use App\Http\Controllers\GameControllerController;


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
})->name('inicio');


//Listado de categorias
Route::get('/tienda/categorias',[CategoriaControllerController::class,'index'])->name('categorias.index');
//Listado de games
Route::get('/tienda/games',[GameControllerController::class,'index'])->name('games.index');
Route::get('/tienda/games/{id}',[GameControllerController::class,'index2'])->name('games.index2');

Route::put('/tienda/games/{id}',[GameControllerController::class,'update'])->name('games.update');
Route::delete('/tienda/games/{id}',[GameControllerController::class,'destroy'])->name('games.destroy');
Route::get('/tienda/games/{id}',[GameControllerController::class,'edit'])->name('games.edit');


//Ruta mostrar todos los coches de x marca

Route::get('/tienda/games/{id}','App\Http\Controllers\GameController@games')->name('games.categoria');

//add
Route::get('/tienda/games/categoria/{id}',[GameControllerController::class, 'games'])->name('games.categorias');