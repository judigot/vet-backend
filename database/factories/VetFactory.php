<?php

namespace Database\Factories;

use App\Models\Vet;
use App\Models\Clinic; // Ensure the Clinic model is imported
use Illuminate\Database\Eloquent\Factories\Factory;

class VetFactory extends Factory
{
    protected $model = Vet::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clinic_id' => Clinic::factory(), // Generates a new Clinic record and uses its ID
            'email' => $this->faker->unique()->safeEmail(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone_number' => $this->faker->phoneNumber(),
            'specialty' => $this->faker->optional()->word(),
        ];
    }
}
