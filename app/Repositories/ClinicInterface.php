<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Clinic;
use App\Models\Vet;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface ClinicInterface extends BaseInterface
{

      /**
       * Get the related Vets.
       *
       * @param int $clinic_id
       * @return ?Collection
       */
      public function getVets(int $clinic_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
}