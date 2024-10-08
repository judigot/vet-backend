<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\VaccinationSchedule;
use App\Repositories\VaccinationScheduleInterface;
use Illuminate\Http\Request;

class VaccinationScheduleController extends BaseController
{

      protected $repository;
  
      public function __construct(VaccinationScheduleInterface $vaccinationscheduleRepository)
      {
          $this->repository = $vaccinationscheduleRepository;
      }

      
    
}
