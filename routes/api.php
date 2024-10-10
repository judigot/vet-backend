<?php
/* Owner: App Scaffolder */

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserUserTypeController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\VaccinationScheduleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\EmergencyContactController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\VetController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PaymentController;

require __DIR__ . '/appointment_routes.php';

Route::middleware('api')->group(function () {

        // Custom routes for UserType
        Route::get('user-types/{id}/users', [UserTypeController::class, 'getUserUserTypes']);
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/user-types/find-by-attributes?type_name=value&user_type_id=value
        Route::get('user-types/find-by-attributes', [UserTypeController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/user-types/order-by?column=type_name&direction=asc
        Route::get('user-types/order-by', [UserTypeController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/user-types/paginate?page=1&per_page=10
        Route::get('user-types/paginate', [UserTypeController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/user-types/search?query=searchTerm
        Route::get('user-types/search', [UserTypeController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/user-types/count
        Route::get('user-types/count', [UserTypeController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/user-types/with-relations?relations=relationName
        Route::get('user-types/with-relations', [UserTypeController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/user-types/latest
        Route::get('user-types/latest', [UserTypeController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/user-types/oldest
        Route::get('user-types/oldest', [UserTypeController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/user-types/random
        Route::get('user-types/random', [UserTypeController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/user-types/soft-delete/{id}
        Route::get('user-types/soft-delete/{id}', [UserTypeController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/user-types/restore/{id}
        Route::get('user-types/restore/{id}', [UserTypeController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/user-types/with-trashed
        Route::get('user-types/with-trashed', [UserTypeController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/user-types/only-trashed
        Route::get('user-types/only-trashed', [UserTypeController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/user-types/without-trashed
        Route::get('user-types/without-trashed', [UserTypeController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/user-types/update-or-create
        Route::post('user-types/update-or-create', [UserTypeController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/user-types/batch-update
        Route::post('user-types/batch-update', [UserTypeController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/user-types/first-or-create
        Route::post('user-types/first-or-create', [UserTypeController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/user-types/first-or-new
        Route::post('user-types/first-or-new', [UserTypeController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/user-types/pluck
        Route::post('user-types/pluck', [UserTypeController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/user-types/where-in
        Route::post('user-types/where-in', [UserTypeController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/user-types/where-not-in
        Route::post('user-types/where-not-in', [UserTypeController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/user-types/where-between
        Route::post('user-types/where-between', [UserTypeController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/user-types/group-by
        Route::post('user-types/group-by', [UserTypeController::class, 'groupBy']);
      
        // Resource routes for UserType
        Route::resource('user-types', UserTypeController::class);

        // Custom routes for User
        Route::get('users/{id}/user-types', [UserController::class, 'getUserUserTypes']);
        Route::get('users/{id}/pets', [UserController::class, 'getPhotos']);
        Route::get('users/{id}/appointments', [UserController::class, 'getPayments']);
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/users/find-by-attributes?updated_at=value&user_id=value
        Route::get('users/find-by-attributes', [UserController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/users/order-by?column=updated_at&direction=asc
        Route::get('users/order-by', [UserController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/users/paginate?page=1&per_page=10
        Route::get('users/paginate', [UserController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/users/search?query=searchTerm
        Route::get('users/search', [UserController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/users/count
        Route::get('users/count', [UserController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/users/with-relations?relations=relationName
        Route::get('users/with-relations', [UserController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/users/latest
        Route::get('users/latest', [UserController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/users/oldest
        Route::get('users/oldest', [UserController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/users/random
        Route::get('users/random', [UserController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/users/soft-delete/{id}
        Route::get('users/soft-delete/{id}', [UserController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/users/restore/{id}
        Route::get('users/restore/{id}', [UserController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/users/with-trashed
        Route::get('users/with-trashed', [UserController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/users/only-trashed
        Route::get('users/only-trashed', [UserController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/users/without-trashed
        Route::get('users/without-trashed', [UserController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/users/update-or-create
        Route::post('users/update-or-create', [UserController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/users/batch-update
        Route::post('users/batch-update', [UserController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/users/first-or-create
        Route::post('users/first-or-create', [UserController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/users/first-or-new
        Route::post('users/first-or-new', [UserController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/users/pluck
        Route::post('users/pluck', [UserController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/users/where-in
        Route::post('users/where-in', [UserController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/users/where-not-in
        Route::post('users/where-not-in', [UserController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/users/where-between
        Route::post('users/where-between', [UserController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/users/group-by
        Route::post('users/group-by', [UserController::class, 'groupBy']);
      
        // Resource routes for User
        Route::resource('users', UserController::class);

        // Custom routes for UserUserType
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/user-user-types/find-by-attributes?user_id=value&user_type_id=value
        Route::get('user-user-types/find-by-attributes', [UserUserTypeController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/user-user-types/order-by?column=user_id&direction=asc
        Route::get('user-user-types/order-by', [UserUserTypeController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/user-user-types/paginate?page=1&per_page=10
        Route::get('user-user-types/paginate', [UserUserTypeController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/user-user-types/search?query=searchTerm
        Route::get('user-user-types/search', [UserUserTypeController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/user-user-types/count
        Route::get('user-user-types/count', [UserUserTypeController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/user-user-types/with-relations?relations=relationName
        Route::get('user-user-types/with-relations', [UserUserTypeController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/user-user-types/latest
        Route::get('user-user-types/latest', [UserUserTypeController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/user-user-types/oldest
        Route::get('user-user-types/oldest', [UserUserTypeController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/user-user-types/random
        Route::get('user-user-types/random', [UserUserTypeController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/user-user-types/soft-delete/{id}
        Route::get('user-user-types/soft-delete/{id}', [UserUserTypeController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/user-user-types/restore/{id}
        Route::get('user-user-types/restore/{id}', [UserUserTypeController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/user-user-types/with-trashed
        Route::get('user-user-types/with-trashed', [UserUserTypeController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/user-user-types/only-trashed
        Route::get('user-user-types/only-trashed', [UserUserTypeController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/user-user-types/without-trashed
        Route::get('user-user-types/without-trashed', [UserUserTypeController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/user-user-types/update-or-create
        Route::post('user-user-types/update-or-create', [UserUserTypeController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/user-user-types/batch-update
        Route::post('user-user-types/batch-update', [UserUserTypeController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/user-user-types/first-or-create
        Route::post('user-user-types/first-or-create', [UserUserTypeController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/user-user-types/first-or-new
        Route::post('user-user-types/first-or-new', [UserUserTypeController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/user-user-types/pluck
        Route::post('user-user-types/pluck', [UserUserTypeController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/user-user-types/where-in
        Route::post('user-user-types/where-in', [UserUserTypeController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/user-user-types/where-not-in
        Route::post('user-user-types/where-not-in', [UserUserTypeController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/user-user-types/where-between
        Route::post('user-user-types/where-between', [UserUserTypeController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/user-user-types/group-by
        Route::post('user-user-types/group-by', [UserUserTypeController::class, 'groupBy']);
      
        // Resource routes for UserUserType
        Route::resource('user-user-types', UserUserTypeController::class);

        // Custom routes for Pet
        Route::get('pets/{id}/users', [PetController::class, 'getPhotos']);
        Route::get('pets/{id}/vets', [PetController::class, 'getMedicalRecords']);
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/pets/find-by-attributes?name=value&weight=value
        Route::get('pets/find-by-attributes', [PetController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/pets/order-by?column=name&direction=asc
        Route::get('pets/order-by', [PetController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/pets/paginate?page=1&per_page=10
        Route::get('pets/paginate', [PetController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/pets/search?query=searchTerm
        Route::get('pets/search', [PetController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/pets/count
        Route::get('pets/count', [PetController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/pets/with-relations?relations=relationName
        Route::get('pets/with-relations', [PetController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/pets/latest
        Route::get('pets/latest', [PetController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/pets/oldest
        Route::get('pets/oldest', [PetController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/pets/random
        Route::get('pets/random', [PetController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/pets/soft-delete/{id}
        Route::get('pets/soft-delete/{id}', [PetController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/pets/restore/{id}
        Route::get('pets/restore/{id}', [PetController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/pets/with-trashed
        Route::get('pets/with-trashed', [PetController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/pets/only-trashed
        Route::get('pets/only-trashed', [PetController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/pets/without-trashed
        Route::get('pets/without-trashed', [PetController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/pets/update-or-create
        Route::post('pets/update-or-create', [PetController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/pets/batch-update
        Route::post('pets/batch-update', [PetController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/pets/first-or-create
        Route::post('pets/first-or-create', [PetController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/pets/first-or-new
        Route::post('pets/first-or-new', [PetController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/pets/pluck
        Route::post('pets/pluck', [PetController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/pets/where-in
        Route::post('pets/where-in', [PetController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/pets/where-not-in
        Route::post('pets/where-not-in', [PetController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/pets/where-between
        Route::post('pets/where-between', [PetController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/pets/group-by
        Route::post('pets/group-by', [PetController::class, 'groupBy']);
      
        // Resource routes for Pet
        Route::resource('pets', PetController::class);

        // Custom routes for VaccinationSchedule
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/vaccination-schedules/find-by-attributes?created_at=value&vaccine_name=value
        Route::get('vaccination-schedules/find-by-attributes', [VaccinationScheduleController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/vaccination-schedules/order-by?column=created_at&direction=asc
        Route::get('vaccination-schedules/order-by', [VaccinationScheduleController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/vaccination-schedules/paginate?page=1&per_page=10
        Route::get('vaccination-schedules/paginate', [VaccinationScheduleController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/vaccination-schedules/search?query=searchTerm
        Route::get('vaccination-schedules/search', [VaccinationScheduleController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/vaccination-schedules/count
        Route::get('vaccination-schedules/count', [VaccinationScheduleController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/vaccination-schedules/with-relations?relations=relationName
        Route::get('vaccination-schedules/with-relations', [VaccinationScheduleController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/vaccination-schedules/latest
        Route::get('vaccination-schedules/latest', [VaccinationScheduleController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/vaccination-schedules/oldest
        Route::get('vaccination-schedules/oldest', [VaccinationScheduleController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/vaccination-schedules/random
        Route::get('vaccination-schedules/random', [VaccinationScheduleController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/vaccination-schedules/soft-delete/{id}
        Route::get('vaccination-schedules/soft-delete/{id}', [VaccinationScheduleController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/vaccination-schedules/restore/{id}
        Route::get('vaccination-schedules/restore/{id}', [VaccinationScheduleController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/vaccination-schedules/with-trashed
        Route::get('vaccination-schedules/with-trashed', [VaccinationScheduleController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/vaccination-schedules/only-trashed
        Route::get('vaccination-schedules/only-trashed', [VaccinationScheduleController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/vaccination-schedules/without-trashed
        Route::get('vaccination-schedules/without-trashed', [VaccinationScheduleController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/vaccination-schedules/update-or-create
        Route::post('vaccination-schedules/update-or-create', [VaccinationScheduleController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/vaccination-schedules/batch-update
        Route::post('vaccination-schedules/batch-update', [VaccinationScheduleController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/vaccination-schedules/first-or-create
        Route::post('vaccination-schedules/first-or-create', [VaccinationScheduleController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/vaccination-schedules/first-or-new
        Route::post('vaccination-schedules/first-or-new', [VaccinationScheduleController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/vaccination-schedules/pluck
        Route::post('vaccination-schedules/pluck', [VaccinationScheduleController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/vaccination-schedules/where-in
        Route::post('vaccination-schedules/where-in', [VaccinationScheduleController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/vaccination-schedules/where-not-in
        Route::post('vaccination-schedules/where-not-in', [VaccinationScheduleController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/vaccination-schedules/where-between
        Route::post('vaccination-schedules/where-between', [VaccinationScheduleController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/vaccination-schedules/group-by
        Route::post('vaccination-schedules/group-by', [VaccinationScheduleController::class, 'groupBy']);
      
        // Resource routes for VaccinationSchedule
        Route::resource('vaccination-schedules', VaccinationScheduleController::class);

        // Custom routes for Photo
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/photos/find-by-attributes?user_id=value&photo_id=value
        Route::get('photos/find-by-attributes', [PhotoController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/photos/order-by?column=user_id&direction=asc
        Route::get('photos/order-by', [PhotoController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/photos/paginate?page=1&per_page=10
        Route::get('photos/paginate', [PhotoController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/photos/search?query=searchTerm
        Route::get('photos/search', [PhotoController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/photos/count
        Route::get('photos/count', [PhotoController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/photos/with-relations?relations=relationName
        Route::get('photos/with-relations', [PhotoController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/photos/latest
        Route::get('photos/latest', [PhotoController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/photos/oldest
        Route::get('photos/oldest', [PhotoController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/photos/random
        Route::get('photos/random', [PhotoController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/photos/soft-delete/{id}
        Route::get('photos/soft-delete/{id}', [PhotoController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/photos/restore/{id}
        Route::get('photos/restore/{id}', [PhotoController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/photos/with-trashed
        Route::get('photos/with-trashed', [PhotoController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/photos/only-trashed
        Route::get('photos/only-trashed', [PhotoController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/photos/without-trashed
        Route::get('photos/without-trashed', [PhotoController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/photos/update-or-create
        Route::post('photos/update-or-create', [PhotoController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/photos/batch-update
        Route::post('photos/batch-update', [PhotoController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/photos/first-or-create
        Route::post('photos/first-or-create', [PhotoController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/photos/first-or-new
        Route::post('photos/first-or-new', [PhotoController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/photos/pluck
        Route::post('photos/pluck', [PhotoController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/photos/where-in
        Route::post('photos/where-in', [PhotoController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/photos/where-not-in
        Route::post('photos/where-not-in', [PhotoController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/photos/where-between
        Route::post('photos/where-between', [PhotoController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/photos/group-by
        Route::post('photos/group-by', [PhotoController::class, 'groupBy']);
      
        // Resource routes for Photo
        Route::resource('photos', PhotoController::class);

        // Custom routes for EmergencyContact
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/emergency-contacts/find-by-attributes?contact_name=value&created_at=value
        Route::get('emergency-contacts/find-by-attributes', [EmergencyContactController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/emergency-contacts/order-by?column=contact_name&direction=asc
        Route::get('emergency-contacts/order-by', [EmergencyContactController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/emergency-contacts/paginate?page=1&per_page=10
        Route::get('emergency-contacts/paginate', [EmergencyContactController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/emergency-contacts/search?query=searchTerm
        Route::get('emergency-contacts/search', [EmergencyContactController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/emergency-contacts/count
        Route::get('emergency-contacts/count', [EmergencyContactController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/emergency-contacts/with-relations?relations=relationName
        Route::get('emergency-contacts/with-relations', [EmergencyContactController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/emergency-contacts/latest
        Route::get('emergency-contacts/latest', [EmergencyContactController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/emergency-contacts/oldest
        Route::get('emergency-contacts/oldest', [EmergencyContactController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/emergency-contacts/random
        Route::get('emergency-contacts/random', [EmergencyContactController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/emergency-contacts/soft-delete/{id}
        Route::get('emergency-contacts/soft-delete/{id}', [EmergencyContactController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/emergency-contacts/restore/{id}
        Route::get('emergency-contacts/restore/{id}', [EmergencyContactController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/emergency-contacts/with-trashed
        Route::get('emergency-contacts/with-trashed', [EmergencyContactController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/emergency-contacts/only-trashed
        Route::get('emergency-contacts/only-trashed', [EmergencyContactController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/emergency-contacts/without-trashed
        Route::get('emergency-contacts/without-trashed', [EmergencyContactController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/emergency-contacts/update-or-create
        Route::post('emergency-contacts/update-or-create', [EmergencyContactController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/emergency-contacts/batch-update
        Route::post('emergency-contacts/batch-update', [EmergencyContactController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/emergency-contacts/first-or-create
        Route::post('emergency-contacts/first-or-create', [EmergencyContactController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/emergency-contacts/first-or-new
        Route::post('emergency-contacts/first-or-new', [EmergencyContactController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/emergency-contacts/pluck
        Route::post('emergency-contacts/pluck', [EmergencyContactController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/emergency-contacts/where-in
        Route::post('emergency-contacts/where-in', [EmergencyContactController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/emergency-contacts/where-not-in
        Route::post('emergency-contacts/where-not-in', [EmergencyContactController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/emergency-contacts/where-between
        Route::post('emergency-contacts/where-between', [EmergencyContactController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/emergency-contacts/group-by
        Route::post('emergency-contacts/group-by', [EmergencyContactController::class, 'groupBy']);
      
        // Resource routes for EmergencyContact
        Route::resource('emergency-contacts', EmergencyContactController::class);

        // Custom routes for Clinic
        Route::get('clinics/{id}/vets', [ClinicController::class, 'getVets']);
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/clinics/find-by-attributes?name=value&updated_at=value
        Route::get('clinics/find-by-attributes', [ClinicController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/clinics/order-by?column=name&direction=asc
        Route::get('clinics/order-by', [ClinicController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/clinics/paginate?page=1&per_page=10
        Route::get('clinics/paginate', [ClinicController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/clinics/search?query=searchTerm
        Route::get('clinics/search', [ClinicController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/clinics/count
        Route::get('clinics/count', [ClinicController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/clinics/with-relations?relations=relationName
        Route::get('clinics/with-relations', [ClinicController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/clinics/latest
        Route::get('clinics/latest', [ClinicController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/clinics/oldest
        Route::get('clinics/oldest', [ClinicController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/clinics/random
        Route::get('clinics/random', [ClinicController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/clinics/soft-delete/{id}
        Route::get('clinics/soft-delete/{id}', [ClinicController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/clinics/restore/{id}
        Route::get('clinics/restore/{id}', [ClinicController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/clinics/with-trashed
        Route::get('clinics/with-trashed', [ClinicController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/clinics/only-trashed
        Route::get('clinics/only-trashed', [ClinicController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/clinics/without-trashed
        Route::get('clinics/without-trashed', [ClinicController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/clinics/update-or-create
        Route::post('clinics/update-or-create', [ClinicController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/clinics/batch-update
        Route::post('clinics/batch-update', [ClinicController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/clinics/first-or-create
        Route::post('clinics/first-or-create', [ClinicController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/clinics/first-or-new
        Route::post('clinics/first-or-new', [ClinicController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/clinics/pluck
        Route::post('clinics/pluck', [ClinicController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/clinics/where-in
        Route::post('clinics/where-in', [ClinicController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/clinics/where-not-in
        Route::post('clinics/where-not-in', [ClinicController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/clinics/where-between
        Route::post('clinics/where-between', [ClinicController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/clinics/group-by
        Route::post('clinics/group-by', [ClinicController::class, 'groupBy']);
      
        // Resource routes for Clinic
        Route::resource('clinics', ClinicController::class);

        // Custom routes for Vet
        Route::get('vets/{id}/pets', [VetController::class, 'getMedicalRecords']);
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/vets/find-by-attributes?clinic_id=value&created_at=value
        Route::get('vets/find-by-attributes', [VetController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/vets/order-by?column=clinic_id&direction=asc
        Route::get('vets/order-by', [VetController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/vets/paginate?page=1&per_page=10
        Route::get('vets/paginate', [VetController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/vets/search?query=searchTerm
        Route::get('vets/search', [VetController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/vets/count
        Route::get('vets/count', [VetController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/vets/with-relations?relations=relationName
        Route::get('vets/with-relations', [VetController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/vets/latest
        Route::get('vets/latest', [VetController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/vets/oldest
        Route::get('vets/oldest', [VetController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/vets/random
        Route::get('vets/random', [VetController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/vets/soft-delete/{id}
        Route::get('vets/soft-delete/{id}', [VetController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/vets/restore/{id}
        Route::get('vets/restore/{id}', [VetController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/vets/with-trashed
        Route::get('vets/with-trashed', [VetController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/vets/only-trashed
        Route::get('vets/only-trashed', [VetController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/vets/without-trashed
        Route::get('vets/without-trashed', [VetController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/vets/update-or-create
        Route::post('vets/update-or-create', [VetController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/vets/batch-update
        Route::post('vets/batch-update', [VetController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/vets/first-or-create
        Route::post('vets/first-or-create', [VetController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/vets/first-or-new
        Route::post('vets/first-or-new', [VetController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/vets/pluck
        Route::post('vets/pluck', [VetController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/vets/where-in
        Route::post('vets/where-in', [VetController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/vets/where-not-in
        Route::post('vets/where-not-in', [VetController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/vets/where-between
        Route::post('vets/where-between', [VetController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/vets/group-by
        Route::post('vets/group-by', [VetController::class, 'groupBy']);
      
        // Resource routes for Vet
        Route::resource('vets', VetController::class);

        // Custom routes for MedicalRecord
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/medical-records/find-by-attributes?created_at=value&diagnosis=value
        Route::get('medical-records/find-by-attributes', [MedicalRecordController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/medical-records/order-by?column=created_at&direction=asc
        Route::get('medical-records/order-by', [MedicalRecordController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/medical-records/paginate?page=1&per_page=10
        Route::get('medical-records/paginate', [MedicalRecordController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/medical-records/search?query=searchTerm
        Route::get('medical-records/search', [MedicalRecordController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/medical-records/count
        Route::get('medical-records/count', [MedicalRecordController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/medical-records/with-relations?relations=relationName
        Route::get('medical-records/with-relations', [MedicalRecordController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/medical-records/latest
        Route::get('medical-records/latest', [MedicalRecordController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/medical-records/oldest
        Route::get('medical-records/oldest', [MedicalRecordController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/medical-records/random
        Route::get('medical-records/random', [MedicalRecordController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/medical-records/soft-delete/{id}
        Route::get('medical-records/soft-delete/{id}', [MedicalRecordController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/medical-records/restore/{id}
        Route::get('medical-records/restore/{id}', [MedicalRecordController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/medical-records/with-trashed
        Route::get('medical-records/with-trashed', [MedicalRecordController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/medical-records/only-trashed
        Route::get('medical-records/only-trashed', [MedicalRecordController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/medical-records/without-trashed
        Route::get('medical-records/without-trashed', [MedicalRecordController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/medical-records/update-or-create
        Route::post('medical-records/update-or-create', [MedicalRecordController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/medical-records/batch-update
        Route::post('medical-records/batch-update', [MedicalRecordController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/medical-records/first-or-create
        Route::post('medical-records/first-or-create', [MedicalRecordController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/medical-records/first-or-new
        Route::post('medical-records/first-or-new', [MedicalRecordController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/medical-records/pluck
        Route::post('medical-records/pluck', [MedicalRecordController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/medical-records/where-in
        Route::post('medical-records/where-in', [MedicalRecordController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/medical-records/where-not-in
        Route::post('medical-records/where-not-in', [MedicalRecordController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/medical-records/where-between
        Route::post('medical-records/where-between', [MedicalRecordController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/medical-records/group-by
        Route::post('medical-records/group-by', [MedicalRecordController::class, 'groupBy']);
      
        // Resource routes for MedicalRecord
        Route::resource('medical-records', MedicalRecordController::class);

        // Custom routes for Appointment
        Route::get('appointments/{id}/users', [AppointmentController::class, 'getPayments']);
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/appointments/find-by-attributes?appointment_id=value&appointment_date=value
        Route::get('appointments/find-by-attributes', [AppointmentController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/appointments/order-by?column=appointment_id&direction=asc
        Route::get('appointments/order-by', [AppointmentController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/appointments/paginate?page=1&per_page=10
        Route::get('appointments/paginate', [AppointmentController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/appointments/search?query=searchTerm
        Route::get('appointments/search', [AppointmentController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/appointments/count
        Route::get('appointments/count', [AppointmentController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/appointments/with-relations?relations=relationName
        Route::get('appointments/with-relations', [AppointmentController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/appointments/latest
        Route::get('appointments/latest', [AppointmentController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/appointments/oldest
        Route::get('appointments/oldest', [AppointmentController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/appointments/random
        Route::get('appointments/random', [AppointmentController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/appointments/soft-delete/{id}
        Route::get('appointments/soft-delete/{id}', [AppointmentController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/appointments/restore/{id}
        Route::get('appointments/restore/{id}', [AppointmentController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/appointments/with-trashed
        Route::get('appointments/with-trashed', [AppointmentController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/appointments/only-trashed
        Route::get('appointments/only-trashed', [AppointmentController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/appointments/without-trashed
        Route::get('appointments/without-trashed', [AppointmentController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/appointments/update-or-create
        Route::post('appointments/update-or-create', [AppointmentController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/appointments/batch-update
        Route::post('appointments/batch-update', [AppointmentController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/appointments/first-or-create
        Route::post('appointments/first-or-create', [AppointmentController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/appointments/first-or-new
        Route::post('appointments/first-or-new', [AppointmentController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/appointments/pluck
        Route::post('appointments/pluck', [AppointmentController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/appointments/where-in
        Route::post('appointments/where-in', [AppointmentController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/appointments/where-not-in
        Route::post('appointments/where-not-in', [AppointmentController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/appointments/where-between
        Route::post('appointments/where-between', [AppointmentController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/appointments/group-by
        Route::post('appointments/group-by', [AppointmentController::class, 'groupBy']);
      
        // Resource routes for Appointment
        Route::resource('appointments', AppointmentController::class);

        // Custom routes for Payment
        
        // GET routes for retrieving data

        // Find records by specific attributes
        // Usage: http://localhost:8000/api/payments/find-by-attributes?appointment_id=value&created_at=value
        Route::get('payments/find-by-attributes', [PaymentController::class, 'findByAttributes']);

        // Order records by specified criteria
        // Usage: http://localhost:8000/api/payments/order-by?column=appointment_id&direction=asc
        Route::get('payments/order-by', [PaymentController::class, 'orderBy']);

        // Paginate records
        // Usage: http://localhost:8000/api/payments/paginate?page=1&per_page=10
        Route::get('payments/paginate', [PaymentController::class, 'paginate']);

        // Search for records based on certain criteria
        // Usage: http://localhost:8000/api/payments/search?query=searchTerm
        Route::get('payments/search', [PaymentController::class, 'search']);

        // Count the total number of records
        // Usage: http://localhost:8000/api/payments/count
        Route::get('payments/count', [PaymentController::class, 'count']);

        // Retrieve records with related models
        // Usage: http://localhost:8000/api/payments/with-relations?relations=relationName
        Route::get('payments/with-relations', [PaymentController::class, 'getWithRelations']);

        // Get the latest records based on a timestamp
        // Usage: http://localhost:8000/api/payments/latest
        Route::get('payments/latest', [PaymentController::class, 'latest']);

        // Get the oldest records based on a timestamp
        // Usage: http://localhost:8000/api/payments/oldest
        Route::get('payments/oldest', [PaymentController::class, 'oldest']);

        // Get a random set of records
        // Usage: http://localhost:8000/api/payments/random
        Route::get('payments/random', [PaymentController::class, 'random']);

        // Soft delete a specific record by ID
        // Usage: http://localhost:8000/api/payments/soft-delete/{id}
        Route::get('payments/soft-delete/{id}', [PaymentController::class, 'softDelete']);

        // Restore a soft-deleted record by ID
        // Usage: http://localhost:8000/api/payments/restore/{id}
        Route::get('payments/restore/{id}', [PaymentController::class, 'restore']);

        // Retrieve records including those that have been soft-deleted
        // Usage: http://localhost:8000/api/payments/with-trashed
        Route::get('payments/with-trashed', [PaymentController::class, 'withTrashed']);

        // Retrieve only soft-deleted records
        // Usage: http://localhost:8000/api/payments/only-trashed
        Route::get('payments/only-trashed', [PaymentController::class, 'onlyTrashed']);

        // Retrieve records excluding those that have been soft-deleted
        // Usage: http://localhost:8000/api/payments/without-trashed
        Route::get('payments/without-trashed', [PaymentController::class, 'withoutTrashed']);

        // POST routes for creating or updating data

        // Create or update a record
        // Usage: http://localhost:8000/api/payments/update-or-create
        Route::post('payments/update-or-create', [PaymentController::class, 'updateOrCreate']);

        // Batch update multiple records
        // Usage: http://localhost:8000/api/payments/batch-update
        Route::post('payments/batch-update', [PaymentController::class, 'batchUpdate']);

        // Find the first record that matches criteria or create a new one
        // Usage: http://localhost:8000/api/payments/first-or-create
        Route::post('payments/first-or-create', [PaymentController::class, 'firstOrCreate']);

        // Find the first record that matches criteria or return a new instance
        // Usage: http://localhost:8000/api/payments/first-or-new
        Route::post('payments/first-or-new', [PaymentController::class, 'firstOrNew']);

        // POST routes for specific queries that might involve complex filtering or ordering

        // Retrieve a list of specific column values
        // Usage: http://localhost:8000/api/payments/pluck
        Route::post('payments/pluck', [PaymentController::class, 'pluck']);

        // Filter records based on a set of values
        // Usage: http://localhost:8000/api/payments/where-in
        Route::post('payments/where-in', [PaymentController::class, 'whereIn']);

        // Filter records excluding a set of values
        // Usage: http://localhost:8000/api/payments/where-not-in
        Route::post('payments/where-not-in', [PaymentController::class, 'whereNotIn']);

        // Filter records between two values
        // Usage: http://localhost:8000/api/payments/where-between
        Route::post('payments/where-between', [PaymentController::class, 'whereBetween']);

        // Group records by specified criteria
        // Usage: http://localhost:8000/api/payments/group-by
        Route::post('payments/group-by', [PaymentController::class, 'groupBy']);
      
        // Resource routes for Payment
        Route::resource('payments', PaymentController::class);
});
