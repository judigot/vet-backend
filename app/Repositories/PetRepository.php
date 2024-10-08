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
use App\Repositories\BaseRepository;

class PetRepository extends BaseRepository implements PetInterface
{
    public function __construct(Pet $model)
    {
        parent::__construct($model);
    }

      /**
       * Get the related Photos.
       *
       * @param int $pet_id
       * @return ?Collection
       */
      public function getPhotos(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $photoModel = new Photo();
        $query = $this->model->find($pet_id)?->photos();
        $column = $column ?? $photoModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Get the related MedicalRecords.
       *
       * @param int $pet_id
       * @return ?Collection
       */
      public function getMedicalRecords(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $medicalRecordModel = new MedicalRecord();
        $query = $this->model->find($pet_id)?->medicalRecords();
        $column = $column ?? $medicalRecordModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Get the related Appointments.
       *
       * @param int $pet_id
       * @return ?Collection
       */
      public function getAppointments(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $appointmentModel = new Appointment();
        $query = $this->model->find($pet_id)?->appointments();
        $column = $column ?? $appointmentModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Find Pet by user_id.
       *
       * @param int $user_id
       * @return ?Pet
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?Pet{
          return $this->model->where('user_id', $user_id)->first();
      }
    
}
