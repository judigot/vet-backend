<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\RoleMiddleware; // Import the RoleMiddleware

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Grouped protected routes with the auth:api middleware
Route::middleware('auth:api')->group(function () {
    // Get user info
    Route::get('/user', [AuthController::class, 'user']);

    Route::get('/authorize', [AuthController::class, 'authorize']);

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout']);  // Add the missing logout route

    // Role-specific routes
    Route::get('/admin', [AuthController::class, 'admin'])->middleware(RoleMiddleware::class . ':Admin');
    Route::get('/vet', [AuthController::class, 'vet'])->middleware(RoleMiddleware::class . ':Vet');
    Route::get('/owner', [AuthController::class, 'owner'])->middleware(RoleMiddleware::class . ':Owner');
});
