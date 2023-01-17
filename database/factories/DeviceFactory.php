<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
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
            'height' => $this->faker->randomDigit,
            'width'  => $this->faker->randomDigit,
            'user_id' => User::first(),
        ];
    }
}
