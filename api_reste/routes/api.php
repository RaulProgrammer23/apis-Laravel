<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

///////////////// Con estas dos volamos (si tenemos apuntes al lado mejor q mejor).

Route::resource('/marcas','App\Http\Controllers\MarcaController');
Route::resource('/coches','App\Http\Controllers\CocheController');


//Listado de coches por marca
Route::get('/coches/marcas/{id}','App\Http\Controllers\CocheController@coches')->name('coches.marca');








/////////////Estas de abajo pues ?¿?¿?¿

//Rutas funciones de coches
Route::get('/coches', 'App\Http\Controllers\CocheController@index');
Route::post('/coches', 'App\Http\Controllers\CocheController@store');
Route::get('/coches{id}', 'App\Http\Controllers\CocheController@show');
Route::put('/coches{id}', 'App\Http\Controllers\CocheController@update');
Route::delete('/coches{id}', 'App\Http\Controllers\CocheController@destroy');

// Route::post('/coches/marca/{id}','App\Http\Controllers\CocheController@coches')->name('coches.marca');


//sería lo mismo pero de otro modo

// Route::get('/coches/marca/{id}',[App\Http\Controllers\CocheController],'coches')->name('coches.marca');

// Route::resource('/marcas','MarcaController'); //de tipo resource el me genera las rutas.

// Route::get('/coche','App\Http\Controllers\CocheController@index'); //(name)
