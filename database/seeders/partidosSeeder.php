<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class partidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
        ['hora' => '2024-06-01 14:00:00', 'lugar' => 'Estadio Apex Legends', 'campeonato_id' => '1'],
        ['hora' => '2024-06-01 16:30:00', 'lugar' => 'Arena del Ancestro', 'campeonato_id' => '2'],
        ['hora' => '2024-06-01 18:00:00', 'lugar' => 'Vanguard Arena', 'campeonato_id' => '3'],
        ['hora' => '2024-06-01 20:00:00', 'lugar' => 'Estadio Rocket', 'campeonato_id' => '4'],
        ['hora' => '2024-06-01 12:00:00', 'lugar' => 'Taverna Hearthstone', 'campeonato_id' => '5'],
        ]);
    }
}
