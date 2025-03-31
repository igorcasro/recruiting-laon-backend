<?php

namespace Database\Factories;

use App\Models\AtorDiretor;
use Illuminate\Database\Eloquent\Factories\Factory;

class AtorDiretorFactory extends Factory
{
    protected $model = AtorDiretor::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'is_diretor' => '0',
        ];
    }
}
