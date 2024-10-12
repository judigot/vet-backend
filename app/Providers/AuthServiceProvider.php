<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Import start
use App\Repositories\UserTypeRepository;
use App\Repositories\UserTypeInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserInterface;
use App\Repositories\UserUserTypeRepository;
use App\Repositories\UserUserTypeInterface;
use App\Repositories\PetRepository;
use App\Repositories\PetInterface;
use App\Repositories\VaccinationScheduleRepository;
use App\Repositories\VaccinationScheduleInterface;
use App\Repositories\PhotoRepository;
use App\Repositories\PhotoInterface;
use App\Repositories\EmergencyContactRepository;
use App\Repositories\EmergencyContactInterface;
use App\Repositories\ClinicRepository;
use App\Repositories\ClinicInterface;
use App\Repositories\VetRepository;
use App\Repositories\VetInterface;
use App\Repositories\MedicalRecordRepository;
use App\Repositories\MedicalRecordInterface;
use App\Repositories\AppointmentRepository;
use App\Repositories\AppointmentInterface;
use App\Repositories\PaymentRepository;
use App\Repositories\PaymentInterface;
// Import end

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
    }
}