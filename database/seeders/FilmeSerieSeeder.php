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
    }
}
