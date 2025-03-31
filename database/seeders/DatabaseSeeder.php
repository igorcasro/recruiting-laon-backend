<?php

namespace Database\Seeders;

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
        // Seeder made to run all the seeders
        $this->call([
            UsuarioSeeder::class,
            AtorDiretorSeeder::class,
            GeneroSeeder::class,
            FilmeSerieSeeder::class,
            SerieSeeder::class,
            EpisodioSeeder::class,
        ]);
    }
}
