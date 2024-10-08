<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Payment;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class PaymentRepository extends BaseRepository implements PaymentInterface
{
    public function __construct(Payment $model)
    {
        parent::__construct($model);
    }

      /**
       * Find Payment by user_id.
       *
       * @param int $user_id
       * @return ?Payment
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?Payment{
          return $this->model->where('user_id', $user_id)->first();
      }
    
      /**
       * Find Payment by appointment_id.
       *
       * @param int $appointment_id
       * @return ?Payment
       */
      public function findByAppointmentId(int $appointment_id, ?string $column = null, string $direction = 'asc'): ?Payment{
          return $this->model->where('appointment_id', $appointment_id)->first();
      }
    
}
