<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Vet;
use App\Models\Appointment;
use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\Clinic;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface VetInterface extends BaseInterface
{

      /**
       * Get the related MedicalRecords.
       *
       * @param int $vet_id
       * @return ?Collection
       */
      public function getMedicalRecords(int $vet_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Get the related Appointments.
       *
       * @param int $vet_id
       * @return ?Collection
       */
      public function getAppointments(int $vet_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Find Vet by clinic_id.
       *
       * @param int $clinic_id
       * @return ?Vet
       */
      public function findByClinicId(int $clinic_id, ?string $column = null, string $direction = 'asc'): ?Vet;
    
}