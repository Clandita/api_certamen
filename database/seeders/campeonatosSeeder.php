<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class campeonatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campeonatos')->insert([
            ['nombre' => 'Legends Apex Showdown','juego'=>'Apex Legends', 'reglas' => 'Equipos de 5 jugadores compiten en un torneo de eliminación directa. Los partidos se juegan al mejor de 3 hasta las semifinales, que son al mejor de 5. Cada equipo debe usar al menos 2 campeones diferentes por jugador durante el torneo.', 'premios' => '$250,000 USD y un trofeo de cristal en forma de dragón.'],
            ['nombre' => 'Eternal Battle Arena','juego'=>'Eternal Battle Arena', 'reglas' => 'Equipos de 4 jugadores se enfrentan en una serie de batallas en modo Captura de Punto. Los partidos son al mejor de 3, y la final es al mejor de 7. Los equipos deben cambiar su composición de héroes después de cada victoria.', 'premios' => '$200,000 USD, una estatua dorada del Ancestro, y periféricos de juego de edición limitada.'],
            ['nombre' => 'Valorant Vanguard Clash','juego'=>'Valorant', 'reglas' => 'Equipos de 5 jugadores participan en un formato de grupo seguido de eliminatorias. Los partidos de grupo son al mejor de 1, y las eliminatorias al mejor de 3. Cada equipo debe jugar al menos una ronda con todos sus agentes en rotación.', 'premios' => '$300,000 USD, anillos de campeón y una exclusiva pistola de trofeo dorada.'],
            ['nombre' => 'Rocket Champions Cup', 'juego'=>'Rocket League','reglas' => 'Equipos de 3 jugadores compiten en un formato de doble eliminación. Los partidos se juegan al mejor de 5, y la gran final es al mejor de 7. Los equipos deben cambiar su configuración de coche y diseño entre cada partido.', 'premios' => '$150,000 USD y un trofeo de coche de cohete en miniatura.'],
            ['nombre' => 'Hearthstone Grand Masters','juego'=>'HearthStone', 'reglas' => 'Jugadores individuales compiten en un formato de liga con rondas semanales. Cada partido se juega al mejor de 5 con diferentes mazos previamente registrados. Los jugadores deben usar al menos una clase diferente en cada ronda.', 'premios' => '$100,000 USD y una carta legendaria dorada única.']
            ]);
    }
}
