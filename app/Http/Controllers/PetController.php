<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\Pet;
use App\Repositories\PetInterface;
use Illuminate\Http\Request;

class PetController extends BaseController
{

      protected $repository;
  
      public function __construct(PetInterface $petRepository)
      {
          $this->repository = $petRepository;
      }

      
      /**
       * Get all Photos related to the given Pet.
       *
       * @param int $pet_id
       * 
       */
      public function getPhotos(Request $request, int $pet_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the photos from the repository
        $photos = $this->repository->getPhotos($pet_id, $column, $direction);
        return response()->json($photos);
      
      }
    
      /**
       * Get all MedicalRecords related to the given Pet.
       *
       * @param int $pet_id
       * 
       */
      public function getMedicalRecords(Request $request, int $pet_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the medical_records from the repository
        $medical_records = $this->repository->getMedicalRecords($pet_id, $column, $direction);
        return response()->json($medical_records);
      
      }
    
      /**
       * Get all Appointments related to the given Pet.
       *
       * @param int $pet_id
       * 
       */
      public function getAppointments(Request $request, int $pet_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the appointments from the repository
        $appointments = $this->repository->getAppointments($pet_id, $column, $direction);
        return response()->json($appointments);
      
      }
    
    
}
