<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//add
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria1 = new Categoria();
        $categoria1->categoria = "Acción";
        $categoria1->nacionalidad = "Japonesa";
        $categoria1->save();

        $categoria2 = new Categoria();
        $categoria2->categoria = "Aventuras";
        $categoria2->nacionalidad = "Europeo";
        $categoria2->save();

        $categoria3 = new Categoria();
        $categoria3->categoria = "Miedo";
        $categoria3->nacionalidad = "Canadiense";
        $categoria3->save(); 
    }
}
