<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
//add
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game1 = new Game();
        $game1->nombre = "Minecraft";
        $game1->PEGI = "12";
        $game1->precio = 16;
        $game1->id_categoria = 1;
        $game1->save();

        $game2 = new Game();
        $game2->nombre = "GTA V";
        $game2->PEGI = "18";
        $game2->precio = 46;
        $game2->id_categoria = 1;
        $game2->save();




    }
}
