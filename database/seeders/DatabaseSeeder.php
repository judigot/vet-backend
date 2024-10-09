<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            UserTypeTableSeeder::class,
            UserUserTypeTableSeeder::class,
            PetTableSeeder::class,
            ClinicTableSeeder::class,
            VetTableSeeder::class,
            AppointmentTableSeeder::class,
            MedicalRecordTableSeeder::class,
            PhotoTableSeeder::class,
            EmergencyContactTableSeeder::class,
            PaymentTableSeeder::class,
            VaccinationScheduleTableSeeder::class,
        ]);
    }
}
