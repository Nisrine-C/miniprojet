<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medecin>
 */
class MedecinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => $this->faker->unique()->word, // Assuming 'cin' is a unique string
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'num_tel' => $this->faker->phoneNumber,
            'genre' => $this->faker->randomElement(['male', 'female']),
        ];
    }
}