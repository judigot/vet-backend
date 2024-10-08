<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Repositories\ClinicInterface;
use Illuminate\Http\Request;

class ClinicController extends BaseController
{

      protected $repository;
  
      public function __construct(ClinicInterface $clinicRepository)
      {
          $this->repository = $clinicRepository;
      }

      
      /**
       * Get all Vets related to the given Clinic.
       *
       * @param int $clinic_id
       * 
       */
      public function getVets(Request $request, int $clinic_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the vets from the repository
        $vets = $this->repository->getVets($clinic_id, $column, $direction);
        return response()->json($vets);
      
      }
    
    
}
