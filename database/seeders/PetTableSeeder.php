<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pet')->insert([
            [
                'user_id' => 1,
                'name' => 'Max',
                'breed' => 'Labrador',
                'age' => 3,
                'weight' => 30.00,
                'medical_history' => 'Rabies vaccination',
                'status' => 'Healthy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'name' => 'Bella',
                'breed' => 'Bulldog',
                'age' => 4,
                'weight' => 25.00,
                'medical_history' => 'Ear infection treated',
                'status' => 'Under Treatment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
