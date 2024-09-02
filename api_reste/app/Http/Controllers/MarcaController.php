<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {//le pasamos todos los datos q estan en este aray. es decir devuelve todas las marcas.
        $marcas = Marca::all();  //all o get , nos devuelve todos los registros que hayan en la tabla marcas.
        return response()->json($marcas);
    }
    
    /**
     * recibimos el request con los campos del formulario o los q me vengan.
     * store es para crear uno nuevo.
     */
    public function store(Request $request)
    {
        $marca = new Marca; //con o sin parentesis Marca();
        $marca->nombre = $request->nombre;
        $marca->nacionalidad = $request->nacionalidad;
        if($marca->save()){
            $mensaje = "Marca añadida con exito";
        }else{
            $mensaje = "Error al añadir la marca";
        }

        $data = [
            'mensaje' => $mensaje,
            'marca' => $marca
        ];
        return response()->json($data);
    }

    /**
     * decimos un  objeto y nos va a devolver todos sus datos.
     */
    public function show(Marca $marca)
    {
        return response()->json($marca);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Marca $marca)
    {
        $marca->nombre = $request->nombre;
        $marca->nacionalidad = $request->nacionalidad;
        if($marca->save()){
            $mensaje = "Marca modificada con éxito";
        }else{
            $mensaje = "Marca no modificada con éxito";
        }
        return response()->json($mensaje);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marca $marca)
    {
        if($marca->delete()){
            $mensaje = "Marca modificada con éxito";
        }else{
            $mensaje = "Marca no modificada con éxito";
        }
        return response()->json($mensaje);

    }
}
