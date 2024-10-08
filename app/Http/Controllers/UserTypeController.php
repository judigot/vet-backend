<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\UserType;
use App\Repositories\UserTypeInterface;
use Illuminate\Http\Request;

class UserTypeController extends BaseController
{

      protected $repository;
  
      public function __construct(UserTypeInterface $usertypeRepository)
      {
          $this->repository = $usertypeRepository;
      }

      
      /**
       * Get all UserUserTypes related to the given UserType.
       *
       * @param int $user_type_id
       * 
       */
      public function getUserUserTypes(Request $request, int $user_type_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the user_user_types from the repository
        $user_user_types = $this->repository->getUserUserTypes($user_type_id, $column, $direction);
        return response()->json($user_user_types);
      
      }
    
    
}
