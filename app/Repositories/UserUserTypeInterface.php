<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\UserUserType;
use App\Models\UserType;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface UserUserTypeInterface extends BaseInterface
{

      /**
       * Find UserUserType by user_type_id.
       *
       * @param int $user_type_id
       * @return ?UserUserType
       */
      public function findByUserTypeId(int $user_type_id, ?string $column = null, string $direction = 'asc'): ?UserUserType;
    
      /**
       * Find UserUserType by user_id.
       *
       * @param int $user_id
       * @return ?UserUserType
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?UserUserType;
    
}