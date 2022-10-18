<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RestaurantController;
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

// DEFAULT
// If users try to go to localhost without a subdomain
// it redirects it to the main subdomain
Route::domain('localhost')->group(function() {
    Route::get('/', function() {
        return redirect('http://www.localhost');
    });
});

// USER
// To access the default site, use the main domain www
// Conflicting issues when you don't
Route::domain('www.localhost')->group(function() {
    Route::get('/', [PagesController::class, 'Home']);
    
    Route::get('/restaurantlist', [PagesController::class, 'RestaurantList']);
    
    //Restricts the register and sign in page for guests only
    //Or those who aren't logged in
    //Signed in means you can't enter
    Route::middleware(['guest:web'])->group(function() {
        Route::get('/register', [PagesController::class, 'Register'])->name('login');
        
        Route::get('/signin', [PagesController::class, 'SignIn']);
        
        Route::post('/login', [UserController::class, 'LogIn']);
    
        Route::post('/createuser', [UserController::class, 'AddUser']);
    });
    
    Route::middleware(['auth:web'])->group(function() {
        Route::get('/edit', [PagesController::class, 'Edit']);
        Route::put('/update', [UserController::class, 'Update']);
        
        Route::post('/logout', [UserController::class, 'LogOut']);

        Route::post('/book/{restaurant}', [BookingController::class, 'Booking']);
    });
});

// ADMIN
// Subdomain dev.localhost
// To access, you have to be logged in first
Route::domain('dev.localhost')->group(function() {
    // Unauthorized access will be sent here
    Route::get('/', [DevController::class, 'Home']); 

    Route::middleware(['guest:admin'])->group(function() {

        Route::get('/register', [DevController::class, 'Register']);

        Route::get('/signin', [DevController::class, 'SignIn']);

        Route::post('/login', [AdminController::class, 'LogIn']);

        Route::post('/addadmin', [AdminController::class, 'AddAdmin']);

    });
    

    // Logged in admins having access to the sites
    Route::middleware(['auth:admin'])->group(function() {
        Route::get('/dashboard', [DevController::class, 'Dashboard']);

        // For admin
        Route::get('/adminform', [DevController::class, 'AdminForm']);
        Route::get('/admintable', [AdminController::class, 'ShowAdmin']);    

        // For booking
        Route::get('/bookingform', [DevController::class, 'BookingForm']);
        Route::get('/bookingtable', [BookingController::class, 'ShowBooking']);
        Route::post('/addbooking/{restaurant}', [BookingController::class, 'AddBooking']);

        // For restaurant
        Route::get('/restaurantform', [DevController::class, 'RestaurantForm']);
        Route::get('/restauranttable', [RestaurantController::class, 'ShowRestaurant']);
        Route::post('/restaurantbooking', [RestaurantController::class, 'AddRestaurant']);

        // For user
        Route::get('/userform', [DevController::class, 'UserForm']);
        Route::get('/usertable', [UserController::class, 'ShowUser']);
        Route::post('/restaurantbooking', [UserController::class, 'AddBooking']);
        

        Route::get('/edit', [DevController::class, 'Edit']);
        Route::post('/update', [AdminController::class, 'Update']);

        Route::post('/logout', [AdminController::class, 'LogOut']);
    });
}); 

// OWNER
Route::domain('owner.localhost')->group(function() {
    Route::get('/', [OwnerController::class, 'Home']);

    Route::middleware(['guest:owner'])->group(function() {
        Route::get('/register', [OwnerController::class, 'Register']);
        
        Route::post('/addowner', [OwnerController::class, 'AddOwner']);
        
        Route::get('/signin', [OwnerController::class, 'SignIn']);
        
        Route::post('/login',  [OwnerController::class, 'LogIn']);
    });
    
    Route::middleware(['auth:owner'])->group(function() {
        Route::get('/dashboard', [OwnerController::class, 'Dashboard']);
        
        Route::get('/createrestaurant', [OwnerController::class, 'CreateRestaurant']);

        Route::post('/create', [OwnerController::class, 'AddRestaurant']);

        Route::get('/restaurant', [OwnerController::class, 'Restaurant']);
    });
});