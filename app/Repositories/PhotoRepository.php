<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Photo;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Repositories\BaseRepository;

class PhotoRepository extends BaseRepository implements PhotoInterface
{
    public function __construct(Photo $model)
    {
        parent::__construct($model);
    }

      /**
       * Find Photo by pet_id.
       *
       * @param int $pet_id
       * @return ?Photo
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Photo{
          return $this->model->where('pet_id', $pet_id)->first();
      }
    
      /**
       * Find Photo by user_id.
       *
       * @param int $user_id
       * @return ?Photo
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?Photo{
          return $this->model->where('user_id', $user_id)->first();
      }
    
}
