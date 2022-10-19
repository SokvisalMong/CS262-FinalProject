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
        return redirect('www.' .env('APP_URL'));
    });
});

// User pages
Route::domain('www.' .env('APP_URL'))->group(function () {
    Route::get('/', [UserController::class, 'home']);

    // List of restaurants
    Route::get('/restaurants', [RestaurantController::class, 'list']);
    
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

    Route::middleware(['auth:web'])->group(function() {
        // User account edit page
        Route::get('/edit', [UserController::class, 'edit']);

        // Updates the account of a user
        Route::put('/update', [UserController::class, 'update']);

        // Logs a user out
        Route::post('/logout', [UserController::class, 'logout']);

        Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);

        // Booking page
        Route::get('/booking/{restaurant}', [RestaurantController::class, 'book']);

        // Books a restaurant
        Route::post('/booking/create/{restaurant}', [BookingController::class, 'store']);
    });
});

// Owner pages
Route::domain('owner.' .env('APP_URL'))->group(function () {
    Route::get('/', [OwnerController::class, 'home']);

    Route::middleware(['guest:owner'])->group(function() {  
        Route::get('/login', [OwnerController::class, 'login'])->name('owner.login');
        
        Route::get('/register', [OwnerController::class, 'register']);
    });

    Route::middleware(['auth:owner'])->group(function() {
        Route::get('/dashboard', [OwnerController::class, 'dashboard']);

        Route::get('/restaurants/edit/{restaurant}', [RestaurantController::class, 'edit']);

        Route::put('/restaurants/update/{restaurant}', [RestaurantController::class, 'update']);
    });
});

// Admin pages
Route::domain('admin.' .env('APP_URL'))->group(function() {
    Route::get('/', [AdminController::class, 'home']);

    Route::middleware(['guest:admin'])->group(function() {
        Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    });
    
    Route::middleware(['auth:admin'])->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        
        Route::get('/register', [AdminController::class, 'register']);
        
        // Creates an admin user
        Route::post('/admins', [AdminController::class, 'store']);

        // Displays the table in the database
        Route::get('/tables/users', [UserController::class, 'showtable']);
        
        Route::get('/tables/admins', [AdminController::class, 'showtable']);

        Route::get('/tables/owners', [OwnerController::class, 'showtable']);

        Route::get('/tables/bookings', [BookingController::class, 'showtable']);

        Route::get('/tables/restaurant', [RestaurantController::class, 'showtable']);
    });
});