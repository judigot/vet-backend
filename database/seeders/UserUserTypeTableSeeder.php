<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserUserTypeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_user_type')->insert([
            ['user_id' => 1, 'user_type_id' => 3], // John Doe is an Owner
            ['user_id' => 2, 'user_type_id' => 1], // Jane Smith is Admin
            ['user_id' => 2, 'user_type_id' => 2], // Jane Smith is Vet
        ]);
    }
}
