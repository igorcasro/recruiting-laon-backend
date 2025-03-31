<?php

namespace Database\Seeders;

use App\Models\Episodio;
use Illuminate\Database\Seeder;

class EpisodioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Episodio::factory()->count(400)->create();
    }
}
