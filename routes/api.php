<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\DomainController;
use App\Http\Controllers\Api\MessageController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\DistrictController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ----------------------------------------------------Settings
Route::get('settings', SettingController::class);
// ----------------------------------------------------Cities
Route::get('cities', CityController::class);
// ----------------------------------------------------Districts
Route::get('districts', DistrictController::class);
// ----------------------------------------------------messages
Route::post('messages', MessageController::class);
// ----------------------------------------------------domains
Route::get('domains', DomainController::class);
