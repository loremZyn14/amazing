<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ToyFactory extends Factory
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
            'color' => $this->faker->hexColor,
            'brand' => $this->faker->name,
        ];
    }
}
