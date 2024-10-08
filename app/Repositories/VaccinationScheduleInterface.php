<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\VaccinationSchedule;
use App\Models\Pet;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface VaccinationScheduleInterface extends BaseInterface
{

      /**
       * Find VaccinationSchedule by pet_id.
       *
       * @param int $pet_id
       * @return ?VaccinationSchedule
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?VaccinationSchedule;
    
}