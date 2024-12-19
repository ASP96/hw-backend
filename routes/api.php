<?php

use App\Http\Controllers\api\VendorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('vendor', VendorController::class);
//->middleware('auth:sanctum');