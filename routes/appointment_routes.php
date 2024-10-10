<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppointmentController;

Route::get('appointments/details', [AppointmentController::class, 'getAppointmentDetails']);