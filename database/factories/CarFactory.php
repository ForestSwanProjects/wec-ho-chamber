<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make' => fake()->company()." Automotive",
            'model' => fake()->colorName(),
            'class' => fake()->randomElement(["Hypercar","LMP2","GTE"]),
            'team_id' => fake()->numberBetween(1,103),
            'race_id' => fake()->numberBetween(1,25),
        ];
    }
}
