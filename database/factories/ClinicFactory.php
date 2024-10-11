<?php

namespace Database\Factories;

use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ClinicFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->optional()->word(),
            'clinic_id' => $this->faker->randomNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'name' => $this->faker->word(),
            'phone_number' => $this->faker->phoneNumber()
        ];
    }
}