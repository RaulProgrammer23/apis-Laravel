<?php

namespace App\Http\Controllers;

use App\Models\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Categoria;

class CategoriaControllerController extends Controller
{
    public function index(){ //aquí cambiamos x la url que pusimos en postman.
        $response = Http::get('http://127.0.0.1:8001/api/categorias'); //si hacemos dd nos mostraría el array de marcas
        $categorias = $response->json();
        //dd($categorias);
        return view('categorias',compact('categorias'));
    }
}
