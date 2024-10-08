<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\Payment;
use App\Repositories\PaymentInterface;
use Illuminate\Http\Request;

class PaymentController extends BaseController
{

      protected $repository;
  
      public function __construct(PaymentInterface $paymentRepository)
      {
          $this->repository = $paymentRepository;
      }

      
    
}
