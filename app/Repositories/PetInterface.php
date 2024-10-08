<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Pet;
use App\Models\Appointment;
use App\Models\MedicalRecord;
use App\Models\Photo;
use App\Models\VaccinationSchedule;
use App\Models\User;
use App\Models\Vet;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface PetInterface extends BaseInterface
{

      /**
       * Get the related Photos.
       *
       * @param int $pet_id
       * @return ?Collection
       */
      public function getPhotos(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Get the related MedicalRecords.
       *
       * @param int $pet_id
       * @return ?Collection
       */
      public function getMedicalRecords(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Get the related Appointments.
       *
       * @param int $pet_id
       * @return ?Collection
       */
      public function getAppointments(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Find Pet by user_id.
       *
       * @param int $user_id
       * @return ?Pet
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?Pet;
    
}