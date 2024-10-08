<?php
/* Owner: App Scaffolder */

namespace App\Repositories;

use App\Models\User;
use App\Models\EmergencyContact;
use App\Models\Payment;
use App\Models\Pet;
use App\Models\Photo;
use App\Models\UserUserType;
use App\Models\UserType;
use App\Models\Appointment;
use Illuminate\Support\Collection;
use App\Repositories\BaseInterface;

interface UserInterface extends BaseInterface
{

      /**
       * Get the related UserUserTypes.
       *
       * @param int $user_id
       * @return ?Collection
       */
      public function getUserUserTypes(int $user_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Get the related Photos.
       *
       * @param int $user_id
       * @return ?Collection
       */
      public function getPhotos(int $user_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
      /**
       * Get the related Payments.
       *
       * @param int $user_id
       * @return ?Collection
       */
      public function getPayments(int $user_id, ?string $column = null, string $direction = 'asc'): ?Collection;
    
}