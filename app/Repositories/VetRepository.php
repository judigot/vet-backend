<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Vet;
use App\Models\Appointment;
use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\Clinic;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class VetRepository extends BaseRepository implements VetInterface
{
    public function __construct(Vet $model)
    {
        parent::__construct($model);
    }

      /**
       * Get the related MedicalRecords.
       *
       * @param int $vet_id
       * @return ?Collection
       */
      public function getMedicalRecords(int $vet_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $medicalRecordModel = new MedicalRecord();
        $query = $this->model->find($vet_id)?->medicalRecords();
        $column = $column ?? $medicalRecordModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Get the related Appointments.
       *
       * @param int $vet_id
       * @return ?Collection
       */
      public function getAppointments(int $vet_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $appointmentModel = new Appointment();
        $query = $this->model->find($vet_id)?->appointments();
        $column = $column ?? $appointmentModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Find Vet by clinic_id.
       *
       * @param int $clinic_id
       * @return ?Vet
       */
      public function findByClinicId(int $clinic_id, ?string $column = null, string $direction = 'asc'): ?Vet{
          return $this->model->where('clinic_id', $clinic_id)->first();
      }
    
}
