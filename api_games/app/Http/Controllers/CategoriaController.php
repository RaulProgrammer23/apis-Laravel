<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->PEGI = $request->PEGI;
        $categoria->precio = $request->precio;
        $categoria->id_categoria = $request->id_categoria;

        if($categoria->save()){
            $mensaje = "Juego añadido con éxito";
        }else{
            $mensaje = "Erorr al añadir juego";
        }

        $data = [
            'mensaje' => $mensaje,
            'categoria' => $categoria
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return response()->json($categoria);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->PEGI = $request->PEGI;
        $categoria->precio = $request->precio;
        $categoria->id_categoria = $request->id_categoria;

        if($categoria->save()){
            $mensaje = "Categoria modificado con éxito";
        }else{
            $mensaje = "Eror al modificar juego";
        }

        $data = [
            'mensaje' => $mensaje,
            'categoria' => $categoria
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $categoria = Categoria::find($id);
        if($categoria->delete()){
            $mensaje = "categoria modificada con éxito";
        }else{
            $mensaje = "categoria no modificada con éxito";
        }
        return response()->json($mensaje);  
        
    }
}
