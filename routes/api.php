<?php

use App\Http\Controllers\ConductorController;
use App\Http\Controllers\VehicleDataController;
use Illuminate\Support\Facades\Route;


Route::get('vehicleData', [VehicleDataController::class, 'index']);
Route::post('vehicleData', [VehicleDataController::class, 'store']);

Route::get('conductor', [ConductorController::class, 'index']);
Route::post('conductor', [ConductorController::class, 'store']);