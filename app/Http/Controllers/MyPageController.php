<?php
/* Owner: App Scaffolder */


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyPageController extends BaseController
{

    /**
     * Return a simple JSON response with a "Hello, World!" message.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function showMyPage(){
      return response()->json([
        [
          'userName' => 'Tomomi',
          'status' => 'success',
        ]
      ]);
  }
    
    
}
