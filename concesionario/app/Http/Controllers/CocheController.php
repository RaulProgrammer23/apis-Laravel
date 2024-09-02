<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocheController extends Controller
{

    public function index()
    {
        $response = Http::get('http://127.0.0.1:8001/api/coches');
        $coches = $response->json();
        //dd($coches);
        return view('coches',compact('coches'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $response = Http::get('http://127.0.0.1:8001/api/marcas');
        $coche = $response->json();
        // dd($data); die();
        return view('coches.create', compact('coche'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $url = env('URL_API');
        $response = Http::post($url.'coches',[
            'matricula' => $request->matricula,
            'modelo' => $request->modelo,
            'color' => $request->color,
            'fecha_matricula' => $request->fecha_matricula,
            'precio' => $request->precio,
            'id_marca' => $request->id_marca
        ]);
        // dd($request); die();
        return redirect()->route('coches.index')->with('status', 'Coche creaico exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(GameController $gameController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $url = env('URL_API');
        $response = Http::get($url. 'coches/'.$id);
        $coche = $response->json();
        return view('coches.edit', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $url = env('URL_API'); 
        $response = Http::put($url . 'coches/' .$id, [
            'matricula' => $request->matricula,
            'modelo' => $request->modelo,
            'color' => $request->color,
            'fecha_matricula' => $request->fecha_matricula,
            'precio' => $request->precio,
            'id_marca' => $request->id_marca
        ]);
        return redirect()->route('coches.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $url = env('URL_API');
        $response = Http::delete($url . 'coches/' .$id);
        return redirect()->route('coches.index');
    }

    public function coches($id){

        $url = 'http://127.0.0.1:8001/api';
        //Cosulata a Marcas
        $response = Http::get($url.'/marcas');
        $marcas = $response->json();
        //Consulta a coches
        $response =  Http::get($url.'/coches/marcas/'.$id); //quizas la s esa.
        $coches = $response->json();
        //dd($coches); die();

        return view('coches.index',compact('coches','marcas'));
    
    }



}