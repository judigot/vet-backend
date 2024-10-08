<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;

use App\Models\Photo;
use App\Repositories\PhotoInterface;
use Illuminate\Http\Request;

class PhotoController extends BaseController
{

      protected $repository;
  
      public function __construct(PhotoInterface $photoRepository)
      {
          $this->repository = $photoRepository;
      }

      
    
}
