<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('payment')->insert([
            [
                'appointment_id' => 1,
                'user_id' => 1,
                'amount' => 50.00,
                'payment_date' => '2024-09-15 12:00:00',
                'payment_status' => 'Completed',
                'payment_method' => 'PayPal',
                'created_at' => now(),
            ],
            [
                'appointment_id' => 2,
                'user_id' => 2,
                'amount' => 100.00,
                'payment_date' => '2024-09-18 09:30:00',
                'payment_status' => 'Pending',
                'payment_method' => 'PayPal',
                'created_at' => now(),
            ],
        ]);
    }
}
