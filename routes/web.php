<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
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
    
    Route::middleware(['guest:web'])->group(function() {
        // User login page
        Route::get('/login', [UserController::class, 'login'])->name('login');
        
        // User Register page
        Route::get('/register', [UserController::class, 'register']);
    });
    Route::middleware(['auth:web'])->group(function() {
        
    });
    
    // Post
    // Creates a new user and logs them in
    Route::post('/users', [UserController::class, 'store']);
    
    // Logs a user in
    Route::post('/authenticate', [UserController::class, 'authenticate']);

    // Logs a user out
    Route::post('/logout', [UserController::class, 'logout']);
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

        Route::get('/restaurant/edit', [OwnerController::class, 'restaurantEdit']);
    });
});

// Admin pages
Route::domain('admin.' .env('APP_URL'))->group(function() {
    Route::get('/', [AdminController::class, 'home']);

    Route::middleware(['guest:admin'])->group(function() {
        Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    });

    Route::middleware(['auth:admin'])->group(function() {
        Route::get('/register', [AdminController::class, 'register']);
    });
});