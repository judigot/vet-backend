<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VetTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('vet')->insert([
            [
                'clinic_id' => 1,
                'first_name' => 'John',
                'last_name' => 'Smith',
                'specialty' => 'Surgery',
                'phone_number' => '+1234567890',
                'email' => 'drsmith@healthypaws.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_id' => 2,
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'specialty' => 'Dermatology',
                'phone_number' => '+0987654321',
                'email' => 'drdoe@petcare.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
