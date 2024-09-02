<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;
//add
use Illuminate\Support\Carbon;

class CocheController extends Controller
{
        /**
     * Display a listing of the resource.
     */

    public function index(){//le pasamos todos los datos q estan en este aray. es decir devuelve todas las coches.
        $coches = coche::all();  //all o get , nos devuelve todos los registros que hayan en la tabla coches.
        return response()->json($coches);
    }

    /**
     * recibimos el request con los campos del formulario o los q me vengan.
     * store es para crear uno nuevo.
     */
    public function store(Request $request)
    {
        $coche = new Coche; //con o sin parentesis coche();
        $coche->matricula = $request->matricula;
        $coche->modelo = $request->modelo;
        $coche->color = $request->color; //faltaba aquí color x eso en el cliente no me modificaba color
        $coche->fecha_matricula = Carbon::now();
        $coche->precio = $request->precio;
        $coche->id_marca = $request->id_marca;

        if($coche->save()){
            $mensaje = "coche añadida con exito";
        }else{
            $mensaje = "Error al añadir el coche";
        }

        $data = [
            'mensaje' => $mensaje,
            'coche' => $coche
        ];

        return response()->json($data); //$mensaje   ruben
    }

    /**
     * decimos un  objeto y nos va a devolver todos sus datos.
     */
    public function show($id)
    {
        $coche = Coche::find($id);
        return response()->json($coche);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coche $coche, $id)
    {
        $coche = Coche::find($id);
        $coche->matricula = $request->matricula;
        $coche->modelo = $request->modelo;
        $coche->color = $request->color; //faltaba aquí color x eso en el cliente no me modificaba color
        $coche->fecha_matricula = Carbon::now();
        $coche->precio = $request->precio;
        $coche->id_marca = $request->id_marca;

        if($coche->save()){
            $mensaje = "coche modificado con exito";
        }else{
            $mensaje = "Error al modificar el coche";
        }

        $data = [
            'mensaje' => $mensaje,
            'coche' => $coche
        ];
        return response()->json($data);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $coche = Coche::find($id);

        if($coche->delete()){
            $mensaje = "coche modificada con éxito";
        }else{
            $mensaje = "coche no modificada con éxito";
        }
        
        return response()->json($mensaje);

    }

    public function coches($id){
        // $games = Videogame::where('category_id', 1)->orderBy('name')->get()
        $coches = Coche::where('id_marca',$id)->get(); //no olvidar el get();
        return response()->json($coches);
    }

    
    // public function porMarca($id){
    //     $coches = Coche::where('id_marca', $id)->get();
    //     //dd($coches);
    //     return view('coches.porMarca', compact('coches'));
    // }


}
