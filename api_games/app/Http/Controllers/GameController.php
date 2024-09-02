<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

//add


class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $game = new Game;
        $game->nombre = $request->nombre;
        $game->PEGI = $request->PEGI;
        $game->precio = $request->precio;
        $game->id_categoria = $request->id_categoria;

        if($game->save()){
            $mensaje = "Juego añadido con éxito";
        }else{
            $mensaje = "Erorr al añadir juego";
        }

        $data = [
            'mensaje' => $mensaje,
            'game' => $game
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $game = Game::find($id);
        return response()->json($game);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game, $id)
    {
        $game = Game::find($id);
        $game->nombre = $request->nombre;
        $game->PEGI = $request->PEGI;
        $game->precio = $request->precio;
        $game->id_categoria = $request->id_categoria;

        if($game->save()){
            $mensaje = "Juego modificado con éxito";
        }else{
            $mensaje = "Eror al modificar juego";
        }

        $data = [
            'mensaje' => $mensaje,
            'game' => $game
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $game = Game::find($id);
        if($game->delete()){
            $mensaje = "coche modificada con éxito";
        }else{
            $mensaje = "coche no modificada con éxito";
        }
        return response()->json($mensaje);  
        
    }
}
