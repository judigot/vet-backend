<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\UserUserType;
use App\Repositories\UserUserTypeInterface;
use Illuminate\Http\Request;

class UserUserTypeController extends BaseController
{

      protected $repository;
  
      public function __construct(UserUserTypeInterface $userusertypeRepository)
      {
          $this->repository = $userusertypeRepository;
      }

      
    
}
