<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//add
use App\Models\Marca;
use Illuminate\Support\Carbon;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marca = new Marca();
        $marca->nombre = "Mercedes";
        $marca->nacionalidad = "Alemana";
        $marca->save();

        $marca2 = new Marca();
        $marca2->nombre = "Seat";
        $marca2->nacionalidad = "Española";
        $marca2->save();

        $marca = new Marca();
        $marca->nombre = "Hyundai";
        $marca->nacionalidad = "Coreana";
        $marca->save();

        





    }
}
