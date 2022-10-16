<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', [PagesController::class, 'Dashboard']); // route for dashboard needs to be lower case cus we dont have button to click into dashboard
                                                                 // we cant type Uppercase in the url for some whatever reason

Route::get('/RestaurantList', [PagesController::class, 'RestaurantList']);

Route::get('/Register', [PagesController::class, 'Register']);

Route::get('/SignIn', [PagesController::class, 'SignIn']);



Route::get('/Show/Restaurant', [RestaurantController::class, 'ShowRestaurant']);

Route::get('/Show/User', [UserController::class, 'ShowUser']);

Route::get('/Show/Booking', [BookingController::class, 'ShowBooking']);

Route::get('/Show/Admin', [AdminController::class, 'ShowAdmin']);