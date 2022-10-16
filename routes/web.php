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

Route::get('/dashboard', [PagesController::class, 'Dashboard']); 



Route::get('/restaurantlist', [PagesController::class, 'RestaurantList']);

Route::get('/register', [PagesController::class, 'Register']);

Route::get('/signin', [PagesController::class, 'SignIn']);



Route::get('/show/restaurant', [RestaurantController::class, 'ShowRestaurant']);

Route::get('/show/user', [UserController::class, 'ShowUser']);

Route::get('/show/booking', [BookingController::class, 'ShowBooking']);

Route::get('/show/admin', [AdminController::class, 'ShowAdmin']);