<?php

namespace Database\Factories;

use App\Models\MedicalRecord;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class MedicalRecordFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'diagnosis' => $this->faker->optional()->word(),
            'medical_record_id' => $this->faker->randomNumber(),
            'pet_id' => Pet::factory(),
            'prescription' => $this->faker->optional()->word(),
            'treatment' => $this->faker->optional()->word(),
            'vet_id' => Vet::factory(),
            'visit_date' => $this->faker->dateTime()
        ];
    }
}