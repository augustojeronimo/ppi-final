<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MoveisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->sentence(),
            'localização' => $this->faker->sentence(),
        ];
    }
}
