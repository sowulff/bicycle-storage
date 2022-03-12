<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bicycle>
 */
class BicycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->bikeName(),
            'image' => $this->faker->bikeImage(),
            'quantity' => $this->faker->numberBetween(0, 20),
            'price' => round($this->faker->numberBetween(5000, 120000), -2)
        ];
    }
}
