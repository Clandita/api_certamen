<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class campeonatos_equiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campeonatos_equipos')->insert([
            ['posicion'=>'2','equipo_id'=>'1','campeonato_id'=>'1'], 
            ['posicion'=>'3','equipo_id'=>'2','campeonato_id'=>'1'], 
            ['posicion'=>'1','equipo_id'=>'3','campeonato_id'=>'1'], 
            ['posicion'=>'1','equipo_id'=>'1','campeonato_id'=>'2'], 
            ['posicion'=>'2','equipo_id'=>'4','campeonato_id'=>'2'], 
            ['posicion'=>'2','equipo_id'=>'5','campeonato_id'=>'3'], 
            ['posicion'=>'1','equipo_id'=>'4','campeonato_id'=>'3'], 
        ]);
    }
}
