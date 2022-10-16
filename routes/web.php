<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use Mockery\Generator\StringManipulation\Pass\Pass;

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

// To access the default site, use the main domain www
// Conflicting issues when you don't
Route::domain('www.localhost')->group(function() {
    Route::get('/', [PagesController::class, 'Home']);
    
    Route::get('/restaurantlist', [PagesController::class, 'RestaurantList']);
    
    //Restricts the register and sign in page for guests only
    //Or those who aren't logged in
    //Signed in means you can't enter
    Route::middleware(['guest'])->group(function() {
        Route::get('/register', [PagesController::class, 'Register'])->name('login');
        
        Route::get('/signin', [PagesController::class, 'SignIn']);
        
        Route::post('/login', [UserController::class, 'LogIn']);
    
        Route::post('/post/createuser', [UserController::class, 'AddUser']);
    });
    
    Route::middleware(['auth'])->group(function() {
        Route::post('/logout', [UserController::class, 'LogOut']);
    
        Route::get('/manage', [UserController::class, 'Edit']);
    });
});

// Subdomain dev.localhost
// To access, you have to be logged in first
Route::domain('dev.localhost')->group(function() {
    // Unauthorized access will be sent here
    Route::middleware(['guest'])->group(function() {

        Route::get('/login', [AdminController::class, 'LogIn'])->name('login');

    });
    
    // Logged in admins having access to the sites
    Route::middleware(['auth'])->group(function() {

        Route::get('/', [PagesController::class, 'Dashboard']); 

        // For admin
        Route::get('/admintable', [AdminController::class, 'ShowAdmin']);    
        Route::get('/adminform', [PagesController::class, 'AdminForm']);
        Route::post('/addadmin', [AdminController::class, 'AddAdmin']);

        // For booking
        Route::get('/bookingtable', [BookingController::class, 'ShowBooking']);
        Route::get('/bookingform', [PagesController::class, 'BookingForm']);
        Route::post('/addbooking', [BookingController::class, 'AddBooking']);

        // For restaurant
        Route::get('/restauranttable', [RestaurantController::class, 'ShowRestaurant']);
        Route::get('/restaurantform', [PagesController::class, 'RestaurantForm']);
        Route::post('/restaurantbooking', [RestaurantController::class, 'AddRestaurant']);

        // For user
        Route::get('/usertable', [UserController::class, 'ShowUser']);
        Route::get('/userform', [PagesController::class, 'UserForm']);
        Route::post('/restaurantbooking', [UserController::class, 'AddBooking']);
        
    });
}); 