<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EquiposSeeder::class,
            JugadoresSeeder::class,
            CampeonatosSeeder::class,
            Campeonatos_equiposSeeder::class,
            PartidosSeeder::class,
            ResultadosSeeder::class,
        ]);
    }
}
