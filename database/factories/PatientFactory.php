<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cin' => $this->faker->numerify('#########'),
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'num_tel' => $this->faker->phoneNumber,
            'genre' => $this->faker->randomElement(['Male', 'Female']),
            'date_naissance' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}