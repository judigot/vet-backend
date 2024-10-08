<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Repositories\MedicalRecordInterface;
use Illuminate\Http\Request;

class MedicalRecordController extends BaseController
{

      protected $repository;
  
      public function __construct(MedicalRecordInterface $medicalrecordRepository)
      {
          $this->repository = $medicalrecordRepository;
      }

      
    
}
