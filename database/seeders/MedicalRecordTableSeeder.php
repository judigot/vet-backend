<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalRecordTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('medical_record')->insert([
            [
                'pet_id' => 1,
                'vet_id' => 1,
                'visit_date' => '2024-09-01 10:30:00',
                'diagnosis' => 'Ear infection',
                'treatment' => 'Antibiotics',
                'prescription' => 'Amoxicillin 250mg',
                'created_at' => now(),
            ],
            [
                'pet_id' => 1,
                'vet_id' => 2,
                'visit_date' => '2024-09-15 12:00:00',
                'diagnosis' => 'Regular check-up',
                'treatment' => 'None',
                'prescription' => 'None',
                'created_at' => now(),
            ],
        ]);
    }
}
