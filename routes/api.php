<?php

use Illuminate\Http\Request;



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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List car
Route::get('cars', 'CarController@index');

// List single car
Route::get('car/{id}', 'CarController@show');

// Create new car
Route::post('car', 'CarController@store');

// Update car
Route::put('car', 'CarController@store');

// Delete car
Route::delete('car/{id}', 'CarController@destroy');

//search
Route::post('search', 'SearchController@filter');

Route::post('auth/login', 'App\Api\V1\Controllers\AuthController@login');
Route::post('auth/signup', 'App\Api\V1\Controllers\AuthController@signup');


