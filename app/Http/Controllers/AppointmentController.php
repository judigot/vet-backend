<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Repositories\AppointmentInterface;
use Illuminate\Http\Request;

class AppointmentController extends BaseController
{

      protected $repository;
  
      public function __construct(AppointmentInterface $appointmentRepository)
      {
          $this->repository = $appointmentRepository;
      }

      
      /**
       * Get all Payments related to the given Appointment.
       *
       * @param int $appointment_id
       * 
       */
      public function getPayments(Request $request, int $appointment_id){
          
        // Extract optional URL parameters
        $column = $request->input('column', null); // Default to null if no column is provided
        $direction = $request->input('direction', 'asc'); // Default to 'asc' if no direction is provided

        // Fetch the payments from the repository
        $payments = $this->repository->getPayments($appointment_id, $column, $direction);
        return response()->json($payments);
      
      }

      public function getAppointmentDetails()
    {
        $appointments = $this->repository->getAppointmentsWithDetails();
        
        // Return data as JSON or pass it to a view
        return response()->json($appointments);
    }
    
    
}
