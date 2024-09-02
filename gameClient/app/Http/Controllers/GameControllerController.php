<?php

namespace App\Http\Controllers;

use App\Models\GameController;
use Illuminate\Http\Request;
//add
use Illuminate\Support\Facades\Http;
use App\Models\Game;
use Illuminate\Support\Env;

class GameControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // $response = Http::get('http://127.0.0.1:8001/api/games');
        // $games = $response->json();
        // //dd($games);
        // return view('games',compact('games'));

        $response = Http::get('http://127.0.0.1:8001/api/games');
        $games = $response->json();
        //dd($games);
        return view('games/index',compact('games'));
    }

    public function index2($id)
    {

        $url = ('URL_API');
        $response = Http::get($url . '/categorias');
        $categorias = $response->json();
        //dd($categorias); die();
        $response = Http::get($url. '/games/categorias/' . $id);
        $games = $response->json();
        return view('games.index2', compact('games', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $response = Http::get($url. 'games/'.$id);
        $game = $response->json();
        return view('edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $url = env('URL_API'); 
        $response = Http::put($url . 'games/' .$id, [
            'id' => $request->id,
            'nombre' => $request->nombre,
            'PEGI' => $request->PEGI,
            'precio' => $request->precio,
            'categoria_id' => $request->id_categoria
        ]);
        return redirect()->route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $url = env('URL_API');
        $response = Http::delete($url . 'games/' .$id);
        return redirect()->route('games.index');
    }

    public function games($id){
        
        $url = ('URL_API');
        $response = Http::get($url . '/categorias');
        $categorias = $response->json();
        //dd($categorias); die();
        $response = Http::get($url. '/games/categorias/' . $id);
        $games = $response->json();
        return view('games.index', compact('games', 'categorias'));
    }

}
