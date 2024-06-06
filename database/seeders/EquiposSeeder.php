<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('equipos')->insert([
            ['nombre'=>'TEAM LIQUID','descripcion'=>'DOMINIO FLUIDO'],
            ['nombre'=>'FNATIC','descripcion'=>'PASION COMPETITIVA'],
            ['nombre'=>'CLOUD9','descripcion'=>'ASCENSO EN NUBES'],
            ['nombre'=>'T1','descripcion'=>'LEGADO DE CAMPEONES'],
            ['nombre'=>'KRU','descripcion'=>'EQUIPO DE KUN AGUERO'],
        ]);
    }
}
