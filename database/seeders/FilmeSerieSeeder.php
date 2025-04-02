<?php

namespace Database\Seeders;

use App\Models\FilmeSerie;
use Illuminate\Database\Seeder;

class FilmeSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FilmeSerie::factory()->count(100)->create();

        // Magic methods (that is not the real name, magic method is what laravel uses behind the scenes like using __call from php)
        FilmeSerie::factory()
        ->count(50)
        ->hasGeneros(rand(1,7))
        ->create();

        FilmeSerie::factory()
        ->count(50)
        ->hasAtores(rand(1,20))
        ->create();
    }
}
