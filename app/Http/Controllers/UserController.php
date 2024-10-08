<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserInterface;
use Illuminate\Http\Request;

class UserController extends BaseController
{

      protected $repository;
  
      public function __construct(UserInterface $userRepository)
      {
          $this->repository = $userRepository;
      }

      
      /**
       * Get all UserUserTypes related to the given User.
       *
       * @param int $user_id
       * 
       */
      public function getUserUserTypes(Request $request, int $user_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the user_user_types from the repository
        $user_user_types = $this->repository->getUserUserTypes($user_id, $column, $direction);
        return response()->json($user_user_types);
      
      }
    
      /**
       * Get all Photos related to the given User.
       *
       * @param int $user_id
       * 
       */
      public function getPhotos(Request $request, int $user_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the photos from the repository
        $photos = $this->repository->getPhotos($user_id, $column, $direction);
        return response()->json($photos);
      
      }
    
      /**
       * Get all Payments related to the given User.
       *
       * @param int $user_id
       * 
       */
      public function getPayments(Request $request, int $user_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the payments from the repository
        $payments = $this->repository->getPayments($user_id, $column, $direction);
        return response()->json($payments);
      
      }
    
    
}
