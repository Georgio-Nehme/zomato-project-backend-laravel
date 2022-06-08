<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;


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


Route::post('/signUp', [UserController::class, 'signUp'])->name("sign-up");
Route::post('/addRestaurant', [RestaurantController::class, 'addRestaurant'])->name("add-restaurant");
Route::post('/signIn', [UserController::class, 'signIn'])->name("signIn");

Route::get('/all_users', [UserController::class, 'getAllUsers'])->name("all-users");
Route::get('/all_restaurants', [RestaurantController::class, 'getAllRestaurants'])->name("all-restaurants");