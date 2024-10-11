<?php

namespace Database\Factories;

use App\Models\VaccinationSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class VaccinationScheduleFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'due_date' => $this->faker->dateTime(),
            'pet_id' => Pet::factory(),
            'status' => $this->faker->optional()->word(),
            'vaccination_schedule_id' => $this->faker->randomNumber(),
            'vaccine_name' => $this->faker->word()
        ];
    }
}