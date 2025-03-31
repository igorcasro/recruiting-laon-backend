<?php

namespace Database\Seeders;

use App\Models\AtorDiretor;
use Illuminate\Database\Seeder;

class AtorDiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtorDiretor::factory()->count(50)->create();
    }
}
