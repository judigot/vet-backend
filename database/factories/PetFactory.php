<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class PetFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'age' => $this->faker->optional()->randomNumber(),
            'breed' => $this->faker->optional()->word(),
            'medical_history' => $this->faker->optional()->word(),
            'name' => $this->faker->word(),
            'pet_id' => $this->faker->randomNumber(),
            'status' => $this->faker->optional()->word(),
            'weight' => $this->faker->optional()->randomFloat(2, 0, 1000)
        ];
    }
}