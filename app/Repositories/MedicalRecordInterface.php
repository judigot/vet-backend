<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\Vet;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface MedicalRecordInterface extends BaseInterface
{

      /**
       * Find MedicalRecord by pet_id.
       *
       * @param int $pet_id
       * @return ?MedicalRecord
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?MedicalRecord;
    
      /**
       * Find MedicalRecord by vet_id.
       *
       * @param int $vet_id
       * @return ?MedicalRecord
       */
      public function findByVetId(int $vet_id, ?string $column = null, string $direction = 'asc'): ?MedicalRecord;
    
}