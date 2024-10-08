<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\Payment;
use App\Models\User;
use App\Models\Pet;
use App\Models\Vet;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface AppointmentInterface extends BaseInterface
{

      /**
       * Get the related Payments.
       *
       * @param int $appointment_id
       * @return ?Collection
       */
      public function getPayments(int $appointment_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Find Appointment by pet_id.
       *
       * @param int $pet_id
       * @return ?Appointment
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Appointment;
    
      /**
       * Find Appointment by vet_id.
       *
       * @param int $vet_id
       * @return ?Appointment
       */
      public function findByVetId(int $vet_id, ?string $column = null, string $direction = 'asc'): ?Appointment;
    
}