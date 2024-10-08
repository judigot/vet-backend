<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\Vet;
use App\Repositories\VetInterface;
use Illuminate\Http\Request;

class VetController extends BaseController
{

      protected $repository;
  
      public function __construct(VetInterface $vetRepository)
      {
          $this->repository = $vetRepository;
      }

      
      /**
       * Get all MedicalRecords related to the given Vet.
       *
       * @param int $vet_id
       * 
       */
      public function getMedicalRecords(Request $request, int $vet_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the medical_records from the repository
        $medical_records = $this->repository->getMedicalRecords($vet_id, $column, $direction);
        return response()->json($medical_records);
      
      }
    
      /**
       * Get all Appointments related to the given Vet.
       *
       * @param int $vet_id
       * 
       */
      public function getAppointments(Request $request, int $vet_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the appointments from the repository
        $appointments = $this->repository->getAppointments($vet_id, $column, $direction);
        return response()->json($appointments);
      
      }
    
    
}
