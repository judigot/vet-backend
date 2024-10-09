<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_type')->insert([
            ['type_name' => 'Admin'],
            ['type_name' => 'Vet'],
            ['type_name' => 'Owner'],
        ]);
    }
}
