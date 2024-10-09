<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('photo')->insert([
            [
                'pet_id' => 1,
                'user_id' => 1,
                'image_url' => 'https://example.com/max_photo.jpg',
                'caption' => 'Max at the park!',
                'created_at' => now(),
            ],
            [
                'pet_id' => 2,
                'user_id' => 1,
                'image_url' => 'https://example.com/bella.jpg',
                'caption' => 'Bella playing fetch',
                'created_at' => now(),
            ],
        ]);
    }
}
