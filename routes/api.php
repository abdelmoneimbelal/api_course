<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdController;
use App\Http\Controllers\Api\AuthController;
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

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->middleware('auth:sanctum');
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

Route::prefix('ads')->controller(AdController::class)->group(function () {
    // basic
    Route::get('/', 'index');
    Route::get('/latest', action: 'latest');
    Route::get('/domain/{domain_id}', 'domain');
    Route::get('/search', 'search');
    // User API ads endpoint
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('create', 'create');
        Route::post('update/{adId}', 'update');
        Route::get('delete/{adId}', 'delete');
        Route::get('myads', 'myads');
    });

    // user API ads endpoint
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('create', 'create');
        Route::post('update/{adId}', 'update');
        Route::get('delete/{adId}', 'delete');
        Route::get('myads', 'myads');
    });
});
