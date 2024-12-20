<?php

use App\Http\Controllers\api\PersonController;
use App\Http\Controllers\api\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('vendor', VendorController::class);
Route::apiResource('person', PersonController::class);
//->middleware('auth:sanctum');