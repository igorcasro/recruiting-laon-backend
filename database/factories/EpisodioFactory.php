<?php

namespace Database\Factories;

use App\Models\Serie;
use App\Models\Episodio;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodioFactory extends Factory
{
    protected $model = Episodio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(20),
            'numero_temporada' => $this->faker->numberBetween(1, Serie::inRandomOrder()->first()->numero_temporadas),
            'numero_episodio' => $this->faker->numberBetween(1,50),
            'duracao' => $this->faker->numberBetween(30,300),
            'data_lancamento' => $this->faker->date(),
            'sinopse' => $this->faker->text(255),
            'id_serie' => Serie::inRandomOrder()->first()->id_serie,
        ];
    }
}
