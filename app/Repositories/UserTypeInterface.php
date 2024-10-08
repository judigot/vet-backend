<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\UserType;
use App\Models\UserUserType;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface UserTypeInterface extends BaseInterface
{

      /**
       * Get the related UserUserTypes.
       *
       * @param int $user_type_id
       * @return ?Collection
       */
      public function getUserUserTypes(int $user_type_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
}