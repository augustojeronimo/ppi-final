<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
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
            'descricao' => $this->faker->text(),
            'imagem' => $this->faker->imageUrl(),
        ];
    }
}
