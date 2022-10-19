<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Redirects non subdomain url to www subdomain
Route::domain(env('APP_URL'))->group(function() {
    Route::get('/', function() {
        return redirect('http://www.' .env('APP_URL'));
    });
});
    
// User pages
Route::domain('www.' .env('APP_URL'))->group(function () {
    // Index page
    Route::get('/', [UserController::class, 'home']);

    // About us page
    Route::get('/aboutus', [UserController::class, 'aboutUs']);

    // List of restaurants for users to choose from page
    Route::get('/restaurants', [RestaurantController::class, 'showAll']);

    // Individual restaurant page
    Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);
    
    // Non authenthicated users can access
    Route::middleware(['guest:web'])->group(function() {
        // User login page
        Route::get('/login', [UserController::class, 'login'])->name('login');
        
        // User Register page
        Route::get('/register', [UserController::class, 'register']);

        // Creates a new user and logs them in
        Route::post('/users', [UserController::class, 'store']);
        
        // Logs a user in
        Route::post('/authenticate', [UserController::class, 'authenticate']);
    });

    // Authenticated users can access
    Route::middleware(['auth:web'])->group(function() {
        // User account edit page
        Route::get('/edit', [UserController::class, 'edit']);

        // Updates the account of a user
        Route::put('/update', [UserController::class, 'update']);

        // Logs a user out
        Route::post('/logout', [UserController::class, 'logout']);
        
        // User's previous and present bookings page
        // Should be sorted by Active, Canceled, Completed
        Route::get('/bookings', [BookingController::class, 'show']);

        // Booking page
        Route::get('/bookings/{restaurant}', [RestaurantController::class, 'book']);

        // Books a restaurant
        Route::post('/bookings/create/{restaurant}', [BookingController::class, 'store']);

        // Changes the status enum value to Canceled
        Route::put('/bookings/cancel/{booking}', [BookingController::class, 'cancel']);
    });
});

// Owner pages
Route::domain('owner.' .env('APP_URL'))->group(function () {
    Route::get('/', [OwnerController::class, 'home']);

    Route::middleware(['guest:owner'])->group(function() {  
        // Login page for owner accounts
        Route::get('/login', [OwnerController::class, 'login'])->name('owner.login');
        
        // Logs the owner in
        Route::post('/authenticate', [OwnerController::class, 'authenticate']);

        // Register page for owners
        Route::get('/register', [OwnerController::class, 'register']);
    });

    Route::middleware(['auth:owner'])->group(function() {
        // Dashboard for logged in owners
        // Purpose: unsure
        Route::get('/dashboard', [OwnerController::class, 'dashboard']);

        // Page to create restaurant
        Route::get('/restaurants/create', [RestaurantController::class, 'create']);

        // Post method to create restaurant
        Route::post('/restaurants', [RestaurantController::class, 'store']);

        // Page to edit restaurant details
        Route::get('/restaurants/edit/{restaurant}', [RestaurantController::class, 'edit']);

        // PUT method to update information of a restaurant
        Route::put('/restaurants/update/{restaurant}', [RestaurantController::class, 'update']);
    
        // Logs the owner out of their account.
        Route::post('/logout', [OwnerController::class, 'logout']);
    });
});

// Admin pages
Route::domain('admin.' .env('APP_URL'))->group(function() {
    Route::get('/', [AdminController::class, 'home']);

    Route::middleware(['guest:admin'])->group(function() {
        // Login page for admin users
        Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    
        Route::post('/authenticate', [AdminController::class, 'authenticate']);
    });
    
    Route::middleware(['auth:admin'])->group(function() {
        // Dashboard for admins after authenticating
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        
        // Page to create more admin users from the default admin account
        Route::get('/register', [AdminController::class, 'register']);
        
        // Logs the admin out of the account
        Route::post('/logout', [AdminController::class, 'logout']);

        // Creates an admin user
        Route::post('/admins', [AdminController::class, 'store']);

        // Displays the table in the database
        Route::get('/tables/users', [UserController::class, 'showtable']);
        Route::get('/tables/admins', [AdminController::class, 'showtable']);
        Route::get('/tables/owners', [OwnerController::class, 'showtable']);
        Route::get('/tables/bookings', [BookingController::class, 'showtable']);
        Route::get('/tables/restaurant', [RestaurantController::class, 'showtable']);

        // Delete data
        Route::delete('/users/{user}', [UserController::class, 'destroy']);
        Route::delete('/owners/{owner}', [OwnerController::class, 'destroy']);
        Route::delete('/admins/{admin}', [AdminController::class, 'destroy']);
        Route::delete('/restaurants/{restaurant}', [RestaurantController::class, 'destroy']);
        Route::delete('/bookings/{booking}', [BookingController::class, 'destroy']);
    });
});