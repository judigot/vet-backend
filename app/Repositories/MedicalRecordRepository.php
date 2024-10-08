<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\Vet;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class MedicalRecordRepository extends BaseRepository implements MedicalRecordInterface
{
    public function __construct(MedicalRecord $model)
    {
        parent::__construct($model);
    }

      /**
       * Find MedicalRecord by pet_id.
       *
       * @param int $pet_id
       * @return ?MedicalRecord
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?MedicalRecord{
          return $this->model->where('pet_id', $pet_id)->first();
      }
    
      /**
       * Find MedicalRecord by vet_id.
       *
       * @param int $vet_id
       * @return ?MedicalRecord
       */
      public function findByVetId(int $vet_id, ?string $column = null, string $direction = 'asc'): ?MedicalRecord{
          return $this->model->where('vet_id', $vet_id)->first();
      }
    
}
