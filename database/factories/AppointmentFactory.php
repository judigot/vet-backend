<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AppointmentFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'appointment_date' => $this->faker->dateTime(),
            'appointment_id' => $this->faker->randomNumber(),
            'notes' => $this->faker->optional()->word(),
            'pet_id' => Pet::factory(),
            'status' => $this->faker->optional()->word(),
            'vet_id' => Vet::factory()
        ];
    }
}