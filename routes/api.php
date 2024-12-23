<?php

use App\Http\Controllers\api\LocationController;
use App\Http\Controllers\api\PersonController;
use App\Http\Controllers\api\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\VendorModelController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('vendor', VendorController::class);
Route::apiResource('vendor/{vendor}/models', VendorModelController::class);
Route::apiResource('person', PersonController::class);
//->middleware('auth:sanctum');

Route::apiResource('location', LocationController::class);
