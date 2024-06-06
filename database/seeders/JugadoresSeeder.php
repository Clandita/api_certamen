<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jugadores')->insert([
            ['rut'=>'20.000.000-0','nombre'=>'Angelo','apellido'=>'Mori','nickname'=>'KeznitDeus','equipo_id'=>'5'],
            ['rut'=>'22.222.222-2','nombre'=>'Claudia','apellido'=>'Gómez','nickname'=>'ClanditApp','equipo_id'=>'1'],
            ['rut'=>'11.111.222-2','nombre'=>'Martin','apellido'=>'Villablanca','nickname'=>'VillaGol','equipo_id'=>'2'],
            ['rut'=>'22.222.111-1','nombre'=>'Tomás','apellido'=>'Peña','nickname'=>'Tomoxx','equipo_id'=>'2'],
        ]);
    }
}
