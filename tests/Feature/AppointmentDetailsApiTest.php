<?php

namespace Tests\Feature;

use App\Models\Pet;
use App\Models\Vet;
use Tests\TestCase;
use App\Models\User;
use App\Models\Clinic;
use App\Models\Payment;
use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AppointmentDetailsApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test fetching appointment details with all related information.
     */
    public function testGetAppointmentDetails()
    {
        // Setup test data
        $user = User::factory()->create();
        $clinic = Clinic::factory()->create();
        $vet = Vet::factory()->create(['clinic_id' => $clinic->id]);
        $pet = Pet::factory()->create(['user_id' => $user->id]);
        $appointment = Appointment::factory()->create(['pet_id' => $pet->id, 'vet_id' => $vet->id]);

        $payment = Payment::factory()->create([
            'appointment_id' => $appointment->id,
            'user_id' => $user->id,
            'amount' => 50.00,
            'payment_method' => 'PayPal',
            'payment_status' => 'Completed',
        ]);

        // Make the GET request to /api/appointments/details
        $response = $this->getJson('/api/appointments/details');

        // Assert that the request is successful and includes correct details
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'appointment_id' => $appointment->id,
            'vet_name' => $vet->first_name . ' ' . $vet->last_name,
            'clinic_name' => $clinic->name,
            'pet_name' => $pet->name,
            'payment_amount' => '50.00',
            'payment_status' => 'Completed',
        ]);
    }
}
