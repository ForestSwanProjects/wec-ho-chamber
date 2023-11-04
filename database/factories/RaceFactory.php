<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Race>
 */
class RaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'circuit_name' => fake()->name(),//try to change to a race circuit with correct country
            'country' => fake()->country(),
            'no_hours' => fake()->numberBetween(4, 10),
            'date_of_race' => fake()->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
