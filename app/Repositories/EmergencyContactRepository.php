<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\EmergencyContact;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class EmergencyContactRepository extends BaseRepository implements EmergencyContactInterface
{
    public function __construct(EmergencyContact $model)
    {
        parent::__construct($model);
    }

      /**
       * Find EmergencyContact by user_id.
       *
       * @param int $user_id
       * @return ?EmergencyContact
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?EmergencyContact{
          return $this->model->where('user_id', $user_id)->first();
      }
    
}
