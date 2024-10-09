<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmergencyContactTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('emergency_contact')->insert([
            [
                'user_id' => 1,
                'contact_name' => 'Animal Hospital',
                'phone_number' => '+11234567890',
                'relationship' => 'Emergency Vet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'contact_name' => 'Local Vet',
                'phone_number' => '+11234567891',
                'relationship' => 'Vet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
