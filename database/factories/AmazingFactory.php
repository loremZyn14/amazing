<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AmazingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'test' => 'test',
            'color' => $this->faker->safeColorName
        ];
    }
}
