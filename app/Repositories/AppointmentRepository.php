<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Pet;
use App\Models\Vet;
use App\Models\User;
use App\Models\Payment;
use App\Models\Appointment;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class AppointmentRepository extends BaseRepository implements AppointmentInterface
{
    public function __construct(Appointment $model)
    {
        parent::__construct($model);
    }

    /**
     * Get all appointment details with related data.
     *
     * @return Collection
     */
    public function getAppointmentsWithDetails(): Collection
    {
        return DB::table('appointment')
            ->select(
                'appointment.*',
                // Vet information
                DB::raw("CONCAT(vet.first_name, ' ', vet.last_name) AS vet_name"),
                'vet.specialty AS vet_specialty',
                'vet.phone_number AS vet_phone_number',
                'vet.email AS vet_email',
                // Clinic information
                'clinic.name AS clinic_name',
                'clinic.address AS clinic_address',
                'clinic.phone_number AS clinic_phone_number',
                'clinic.email AS clinic_email',
                // Pet information
                'pet.name AS pet_name',
                'pet.breed AS pet_breed',
                'pet.age AS pet_age',
                'pet.weight AS pet_weight',
                'pet.medical_history AS pet_medical_history',
                'pet.status AS pet_status',
                // Owner (User) information
                DB::raw("CONCAT(user.first_name, ' ', user.last_name) AS owner_name"),
                'user.email AS owner_email',
                'user.phone_number AS owner_phone_number',
                // Payment information
                'payment.payment_id',
                'payment.amount AS payment_amount',
                'payment.payment_date',
                'payment.payment_method',
                'payment.payment_status'
            )
            ->leftJoin('vet', 'appointment.vet_id', '=', 'vet.vet_id')
            ->leftJoin('clinic', 'vet.clinic_id', '=', 'clinic.clinic_id')
            ->leftJoin('pet', 'appointment.pet_id', '=', 'pet.pet_id')
            ->leftJoin('user', 'pet.user_id', '=', 'user.user_id')
            ->leftJoin('payment', 'appointment.appointment_id', '=', 'payment.appointment_id')
            ->groupBy(
                'appointment.appointment_id',
                'vet.vet_id',
                'clinic.clinic_id',
                'pet.pet_id',
                'user.user_id',
                'payment.payment_id'
            )
            ->get();
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
