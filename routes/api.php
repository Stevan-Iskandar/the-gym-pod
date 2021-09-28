<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::middleware('guest:admin')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
});

// Route::middleware('auth:admin')->group(function () {
//     Route::get('', [DashboardController::class, '']);
// });
