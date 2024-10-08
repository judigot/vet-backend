<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\VaccinationSchedule;
use App\Models\Pet;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class VaccinationScheduleRepository extends BaseRepository implements VaccinationScheduleInterface
{
    public function __construct(VaccinationSchedule $model)
    {
        parent::__construct($model);
    }

      /**
       * Find VaccinationSchedule by pet_id.
       *
       * @param int $pet_id
       * @return ?VaccinationSchedule
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?VaccinationSchedule{
          return $this->model->where('pet_id', $pet_id)->first();
      }
    
}
