<?php

namespace Database\Factories;

use App\Models\EmergencyContact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class EmergencyContactFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contact_name' => $this->faker->optional()->word(),
            'emergency_contact_id' => $this->faker->randomNumber(),
            'phone_number' => $this->faker->phoneNumber(),
            'relationship' => $this->faker->optional()->word()
        ];
    }
}