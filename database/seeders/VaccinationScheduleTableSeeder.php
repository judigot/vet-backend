<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccinationScheduleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('vaccination_schedule')->insert([
            [
                'pet_id' => 1,
                'vaccine_name' => 'Rabies',
                'due_date' => '2024-11-15',
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pet_id' => 1,
                'vaccine_name' => 'Distemper',
                'due_date' => '2024-12-01',
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
