<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\UserType;
use App\Models\UserUserType;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class UserTypeRepository extends BaseRepository implements UserTypeInterface
{
    public function __construct(UserType $model)
    {
        parent::__construct($model);
    }

      /**
       * Get the related UserUserTypes.
       *
       * @param int $user_type_id
       * @return ?Collection
       */
      public function getUserUserTypes(int $user_type_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $userUserTypeModel = new UserUserType();
        $query = $this->model->find($user_type_id)?->userUserTypes();
        $column = $column ?? $userUserTypeModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
}
