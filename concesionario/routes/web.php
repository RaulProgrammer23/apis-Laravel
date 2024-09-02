<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CocheController;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

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

// Añadir ->name('inicio') para cargar la welcome vista
Route::get('/', function () {
    return view('welcome');
})->name('inicio'); 

// Login Registro (no necesario solo de prueba inicial q luego es borrado ...)

// Route::get('/login', function () {
//     return 'Login page';
// })->name('login'); 



// Usuarios   (cambiar y adaptar a español y lo más resumido posible).

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



// RUTA PARA MARCAS -- /concesionario lo añadimos para distinguir un poco.

//Listado de marcas
Route::get('/concesionario/marcas',[MarcaController::class,'index'])->name('marcas.index');
//Listado de coches
Route::get('/concesionario/coches',[CocheController::class,'index'])->name('coches.index');
// Listado completo coches / marcas
Route::get('concesionario/coches/marca/{id}',[CocheController::class,'coches'])->name('coches.marcas'); ////////////////////////////////


//Crear 
Route::get('/coches/create',[CocheController::class,'create'])->name('coches.create');  //El usuario Ruben no puede meterse aquí.
Route::post('/coches',[CocheController::class,'store'])->name('coches.store');

//Actualizar
Route::put('/concesionario/coches/{id}',[CocheController::class,'update'])->name('coches.update');
Route::get('/concesionario/coches/{id}',[CocheController::class,'edit'])->name('coches.edit');

//Borrar
Route::delete('/concesionario/coches/{id}',[CocheController::class,'destroy'])->name('coches.destroy');



//Ruta mostrar todos los coches de x marca


// Route::get('/coches/{id}',[CocheController::class,'porMarca'])->name('coches.porMarca');

Route::get('/coches/marca/{id}','App\Http\Controllers\CocheController@coches')->name('coches.marca');

//add
Route::get('/concesionario/coches/marca/{id}',[CocheController::class, 'coches'])->name('coches.marcas');



// // Diego 
// Route::get('/ubicaciones',[UbicacionController::class,'index'])->name('ubicaciones.index');

// // Rutas articulo

// Route::get('/articulos',[ArticuloController::class,'index'])->name('articulos.index');
// Route::get('/articulos/create',[ArticuloController::class,'create'])->name('articulos.create');
// Route::post('articulos',[ArticuloController::class,'store'])->name('articulos.store');
// Route::delete('articulos/{id}',[ArticuloController::class,'destroy'])->name('articulos.destroy');
// Route::post('articulos/update',[ArticuloController::class,'update'])->name('articulos.update');
// Route::get('/articulos/edit/{id}',[ArticuloController::class,'edit'])->name('articulos.edit');
// Rutas ubicacion