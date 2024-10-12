<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@example.com',
                'password_hash' => bcrypt('123'),
                'phone_number' => '+1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane@example.com',
                'password_hash' => bcrypt('123'),
                'phone_number' => '+1234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
