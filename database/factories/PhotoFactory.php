<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class PhotoFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'caption' => $this->faker->optional()->word(),
            'image_url' => $this->faker->word(),
            'pet_id' => Pet::factory(),
            'photo_id' => $this->faker->randomNumber()
        ];
    }
}