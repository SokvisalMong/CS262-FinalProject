<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get list
Route::get('/get/ShowAdmin', [ApiController::class, 'ShowAdmin']);

Route::get('/get/ShowRestaurant', [ApiController::class, 'ShowRestaurant']);

Route::post('/get/ShowBooking', [ApiController::class, 'ShowBooking']);

Route::post('/get/ShowUser', [ApiController::class, 'ShowUser']);

// // FULL URL Call http://127.0.0.1:8000/api/do/orderdel/65
// Route::get('/do/orderdel/{id}', [ApiController::class, 'orderdel']);

