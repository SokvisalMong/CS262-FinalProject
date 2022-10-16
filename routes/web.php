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

Route::get('/', [PagesController::class, 'Home']);

Route::get('/restaurantlist', [PagesController::class, 'RestaurantList']);

//Restricts the register and sign in page for guests only
//Or those who aren't logged in
//Signed in means you can't enter
Route::middleware(['guest'])->group(function() {
    Route::get('/register', [PagesController::class, 'Register'])->name('login');
    
    Route::get('/signin', [PagesController::class, 'SignIn']);
});

Route::post('/post/createuser', [UserController::class, 'AddUser']);

Route::post('/logout', [UserController::class, 'LogOut']);

Route::post('/login', [UserController::class, 'LogIn']);

// Subdomain dev.localhost
// To access, you have to be logged in first
Route::domain('dev.localhost')->group(function() {
   // Route::middleware(['auth'])->group(function() {
        Route::get('/dashboard', [PagesController::class, 'Dashboard']); 

        Route::get('/dashboard/restauranttable', [RestaurantController::class, 'ShowRestaurant']);

        Route::get('/dashboard/usertable', [UserController::class, 'ShowUser']);


        // For admin
        Route::get('/dashboard/admintable', [AdminController::class, 'ShowAdmin']);    
        Route::get('/dashboard/adminform', [PagesController::class, 'AdminForm']);
        Route::post('/dashboard/addadmin', [AdminController::class, 'AddAdmin']);

        // For booking
        Route::get('/dashboard/bookingtable', [BookingController::class, 'ShowBooking']);
        Route::get('/dashboard/addbooking', [BookingController::class, 'AddBooking']);





        Route::get('/dashboard/adduser', [UserController::class, 'AddUser']);
        
        Route::get('/dashboard/addrestaurant', [RestaurantController::class, 'AddRestaurant']);

        Route::get('/login', [AdminController::class, 'LogIn'])->name('login');
    // });
}); 