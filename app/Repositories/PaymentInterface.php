<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Payment;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface PaymentInterface extends BaseInterface
{

      /**
       * Find Payment by appointment_id.
       *
       * @param int $appointment_id
       * @return ?Payment
       */
      public function findByAppointmentId(int $appointment_id, ?string $column = null, string $direction = 'asc'): ?Payment;
    
      /**
       * Find Payment by user_id.
       *
       * @param int $user_id
       * @return ?Payment
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?Payment;
    
}