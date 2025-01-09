<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResiduoFactory extends Factory
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
            'data' => $this->faker->date(),
        ];
    }
}
