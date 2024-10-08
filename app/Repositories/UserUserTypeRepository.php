<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\UserUserType;
use App\Models\UserType;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class UserUserTypeRepository extends BaseRepository implements UserUserTypeInterface
{
    public function __construct(UserUserType $model)
    {
        parent::__construct($model);
    }

      /**
       * Find UserUserType by user_type_id.
       *
       * @param int $user_type_id
       * @return ?UserUserType
       */
      public function findByUserTypeId(int $user_type_id, ?string $column = null, string $direction = 'asc'): ?UserUserType{
          return $this->model->where('user_type_id', $user_type_id)->first();
      }
    
      /**
       * Find UserUserType by user_id.
       *
       * @param int $user_id
       * @return ?UserUserType
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?UserUserType{
          return $this->model->where('user_id', $user_id)->first();
      }
    
}
