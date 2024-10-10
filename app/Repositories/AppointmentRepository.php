<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\Payment;
use App\Models\User;
use App\Models\Vet;
use App\Models\Pet;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class AppointmentRepository extends BaseRepository implements AppointmentInterface
{
    public function __construct(Appointment $model)
    {
        parent::__construct($model);
    }

      /**
       * Get the related Payments.
       *
       * @param int $appointment_id
       * @return ?Collection
       */
      public function getPayments(int $appointment_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $paymentModel = new Payment();
        $query = $this->model->find($appointment_id)?->payments();
        $column = $column ?? $paymentModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Find Appointment by vet_id.
       *
       * @param int $vet_id
       * @return ?Appointment
       */
      public function findByVetId(int $vet_id, ?string $column = null, string $direction = 'asc'): ?Appointment{
          return $this->model->where('vet_id', $vet_id)->first();
      }
    
      /**
       * Find Appointment by pet_id.
       *
       * @param int $pet_id
       * @return ?Appointment
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Appointment{
          return $this->model->where('pet_id', $pet_id)->first();
      }
    
}
