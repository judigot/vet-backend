<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\Photo;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface PhotoInterface extends BaseInterface
{

      /**
       * Find Photo by user_id.
       *
       * @param int $user_id
       * @return ?Photo
       */
      public function findByUserId(int $user_id, ?string $column = null, string $direction = 'asc'): ?Photo;
    
      /**
       * Find Photo by pet_id.
       *
       * @param int $pet_id
       * @return ?Photo
       */
      public function findByPetId(int $pet_id, ?string $column = null, string $direction = 'asc'): ?Photo;
    
}