<?php

namespace App\Providers;

use App\Repositories\PetInterface;

// Import start
use App\Repositories\VetInterface;
use App\Repositories\PetRepository;
use App\Repositories\UserInterface;
use App\Repositories\VetRepository;
use App\Repositories\PhotoInterface;
use App\Repositories\UserRepository;
use App\Repositories\ClinicInterface;
use App\Repositories\PhotoRepository;
use App\Repositories\ClinicRepository;
use App\Repositories\PaymentInterface;
use App\Repositories\PaymentRepository;
use App\Repositories\UserTypeInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserTypeRepository;
use App\Repositories\AppointmentInterface;
use App\Repositories\AppointmentRepository;
use App\Repositories\UserUserTypeInterface;
use App\Repositories\MedicalRecordInterface;
use App\Repositories\UserUserTypeRepository;
use App\Repositories\MedicalRecordRepository;
use App\Repositories\EmergencyContactInterface;
use App\Repositories\EmergencyContactRepository;
use App\Repositories\VaccinationScheduleInterface;
use App\Repositories\VaccinationScheduleRepository;
// Import end

use Laravel\Passport\Passport; // Add this import for Passport

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind start
        $this->app->bind(UserTypeInterface::class, UserTypeRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(UserUserTypeInterface::class, UserUserTypeRepository::class);
        $this->app->bind(PetInterface::class, PetRepository::class);
        $this->app->bind(VaccinationScheduleInterface::class, VaccinationScheduleRepository::class);
        $this->app->bind(PhotoInterface::class, PhotoRepository::class);
        $this->app->bind(EmergencyContactInterface::class, EmergencyContactRepository::class);
        $this->app->bind(ClinicInterface::class, ClinicRepository::class);
        $this->app->bind(VetInterface::class, VetRepository::class);
        $this->app->bind(MedicalRecordInterface::class, MedicalRecordRepository::class);
        $this->app->bind(AppointmentInterface::class, AppointmentRepository::class);
        $this->app->bind(PaymentInterface::class, PaymentRepository::class);
        // Bind end
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        // Register Passport routes manually
        if (class_exists(Passport::class)) {
            Passport::loadKeysFrom(base_path('secret-keys')); // Optional: if you're storing keys in a different location
        }
    }
}
