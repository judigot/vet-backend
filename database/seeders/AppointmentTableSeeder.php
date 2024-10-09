<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('appointment')->insert([
            [
                'pet_id' => 1,
                'vet_id' => 1,
                'appointment_date' => '2024-10-15 10:00:00',
                'status' => 'Confirmed',
                'notes' => 'Regular check-up',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pet_id' => 2,
                'vet_id' => 2,
                'appointment_date' => '2024-10-20 14:00:00',
                'status' => 'Pending',
                'notes' => 'Vaccination',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
