<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class PaymentFactory extends Factory
{
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'appointment_id' => Appointment::factory(),
            'payment_date' => $this->faker->optional()->dateTime(),
            'payment_id' => $this->faker->randomNumber(),
            'payment_method' => $this->faker->optional()->word(),
            'payment_status' => $this->faker->optional()->word()
        ];
    }
}