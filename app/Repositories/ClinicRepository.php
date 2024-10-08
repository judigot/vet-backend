<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Clinic;
use App\Models\Vet;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class ClinicRepository extends BaseRepository implements ClinicInterface
{
    public function __construct(Clinic $model)
    {
        parent::__construct($model);
    }

      /**
       * Get the related Vets.
       *
       * @param int $clinic_id
       * @return ?Collection
       */
      public function getVets(int $clinic_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $vetModel = new Vet();
        $query = $this->model->find($clinic_id)?->vets();
        $column = $column ?? $vetModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
}
