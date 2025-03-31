<?php

namespace Database\Factories;

use App\Models\FilmeSerie;
use App\Models\AtorDiretor;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmeSerieFactory extends Factory
{
    protected $model = FilmeSerie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => 'ativo',
            'ano_lancamento' => $this->faker->year(),
            'id_ator_diretor' => AtorDiretor::inRandomOrder()->first()->id_ator_diretor,
            'titulo_original' => $this->faker->sentence(20),
            'titulo_traduzido' => $this->faker->sentence(20),
            'sinopse' => $this->faker->paragraph(),
            'duracao' => $this->faker->numberBetween(30, 300),
            // See if i need to pass the value for 'tipo', since it will be passed on the seeder
        ];
    }
}
