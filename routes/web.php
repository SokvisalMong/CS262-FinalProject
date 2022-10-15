<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/SignIn', [PagesController::class, 'SignIn']);

Route::get('/Dashboard', [PagesController::class, 'Dashboard']);

Route::get('/RestaurantList', [PagesController::class, 'RestaurantList']);