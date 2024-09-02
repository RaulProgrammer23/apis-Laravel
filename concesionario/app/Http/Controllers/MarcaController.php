<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index(){ //aquí cambiamos x la url que pusimos en postman.
        $response = Http::get('http://127.0.0.1:8001/api/marcas'); //si hacemos dd nos mostraría el array de marcas
        $marcas = $response->json();
        //dd($marcas);
        return view('marcas',compact('marcas'));
    }


}
