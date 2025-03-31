<?php

namespace Database\Factories;

use App\Models\Serie;
use App\Models\FilmeSerie;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    protected $model = Serie::class; 

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Por ser uma entidade vinculada a FilmeSerie, primeiro um FilmeSerie precisa ser criado
        $filmeSerie = FilmeSerie::factory()->create();

        return [
            'numero_temporadas' => $this->faker->randomDigitNotNull(),
            'id_serie' => $filmeSerie->id_filme_serie,
        ];
    }
}
