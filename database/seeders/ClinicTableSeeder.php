<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clinic')->insert([
            [
                'name' => 'Healthy Paws Clinic',
                'address' => '123 Vet St, City',
                'phone_number' => '+1234567890',
                'email' => 'contact@healthypaws.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PetCare Clinic',
                'address' => '456 Pet Rd, City',
                'phone_number' => '+0987654321',
                'email' => 'info@petcare.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
