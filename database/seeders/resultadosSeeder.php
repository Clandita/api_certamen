<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class resultadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resultados')->insert([
            ['equipo_id'=>'1','partido_id'=>'1','puntos'=>'10','ganador'=>false],
            ['equipo_id'=>'2','partido_id'=>'1','puntos'=>'15','ganador'=>true],
            ['equipo_id'=>'1','partido_id'=>'2','puntos'=>'15','ganador'=>true],
            ['equipo_id'=>'4','partido_id'=>'2','puntos'=>'20','ganador'=>false],
        ]);
    }
}
