<?php

use App\Http\Controllers\AdminController;
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
Route::domain(env('APP_URL'))->group(function() {
    Route::get('/', function() {
        return redirect('www.' .env('APP_URL'));
    });
});

// User pages
Route::domain('www.' .env('APP_URL'))->group(function () {
    Route::get('/', [UserController::class, 'home']);
});

// Owner pages
Route::domain('owner.' .env('APP_URL'))->group(function () {
    Route::get('/', [OwnerController::class, 'home']);
});

// Admin pages
Route::domain('dev.' .env('APP_URL'))->group(function() {
    Route::get('/', [AdminController::class, 'home']);
});