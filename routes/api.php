<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::prefix("v1")->group(function() {
    Route::apiResource("cars", CarController::class);
    Route::get("cars/{id}/owner", [CarController::class, "getOwner()"]);

    Route::apiResource("users", UserController::class);
    Route::get("users/{id}/cars", [UserController::class, "getCars()"]);
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
