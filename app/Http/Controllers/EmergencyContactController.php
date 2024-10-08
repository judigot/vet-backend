<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\EmergencyContact;
use App\Repositories\EmergencyContactInterface;
use Illuminate\Http\Request;

class EmergencyContactController extends BaseController
{

      protected $repository;
  
      public function __construct(EmergencyContactInterface $emergencycontactRepository)
      {
          $this->repository = $emergencycontactRepository;
      }

      
    
}
