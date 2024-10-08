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
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

      /**
       * Get the related UserUserTypes.
       *
       * @param int $user_id
       * @return ?Collection
       */
      public function getUserUserTypes(int $user_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $userUserTypeModel = new UserUserType();
        $query = $this->model->find($user_id)?->userUserTypes();
        $column = $column ?? $userUserTypeModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Get the related Photos.
       *
       * @param int $user_id
       * @return ?Collection
       */
      public function getPhotos(int $user_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $photoModel = new Photo();
        $query = $this->model->find($user_id)?->photos();
        $column = $column ?? $photoModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
      /**
       * Get the related Payments.
       *
       * @param int $user_id
       * @return ?Collection
       */
      public function getPayments(int $user_id, ?string $column = null, string $direction = 'asc'): ?Collection{
          
        $paymentModel = new Payment();
        $query = $this->model->find($user_id)?->payments();
        $column = $column ?? $paymentModel->getKeyName();
        $query->orderBy($column, $direction);
        return $query ? $query->get() : null;
        
      }
    
}
