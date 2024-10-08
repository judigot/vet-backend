<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\EmergencyContact;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface EmergencyContactInterface extends BaseInterface
{

      /**
       * Find EmergencyContact by user_id.
       *
       * @param int $user_id
       * @return ?EmergencyContact
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?EmergencyContact;
    
}