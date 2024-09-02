<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//add
use App\Models\Coche;
use Illuminate\Support\Carbon;

class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coche1 = new Coche;
        $coche1->matricula = "1254ABC";
        $coche1->modelo = "C";
        $coche1->color = "blanco";
        $coche1->fecha_matricula = Carbon::now();
        $coche1->precio=30000;
        $coche1->id_marca=1;
        $coche1->save();

        $coche2 = new Coche;
        $coche2->matricula = "111111";
        $coche2->modelo = "A";
        $coche2->color = "azul";
        $coche2->fecha_matricula = Carbon::now();
        $coche2->precio=1200;
        $coche2->id_marca=2;
        $coche2->save();

    }
}
