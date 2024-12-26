<?php

use App\Http\Controllers\api\LocationController;
use App\Http\Controllers\api\HardwareGroupController;
use App\Http\Controllers\api\PersonController;
use App\Http\Controllers\api\Profilactica\ConsumableController;
use App\Http\Controllers\api\ProfilacticaController;
use App\Http\Controllers\api\VendorController;
use App\Http\Controllers\api\OrganizationController;
use App\Models\Profilactica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\VendorModelController;
use App\Http\Controllers\api\rs\services\OSController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('vendor', VendorController::class);
Route::apiResource('vendor/{vendor}/models', VendorModelController::class);
Route::apiResource('person', PersonController::class);
Route::apiResource('hardware-group', HardwareGroupController::class);

//->middleware('auth:sanctum');

Route::apiResource('location', LocationController::class);
Route::apiResource('organization', OrganizationController::class);
Route::apiResource('profilactica', ProfilacticaController::class);
Route::apiResource('profilactica/consumable', ConsumableController::class);

// Report by services
Route::apiResource('report/rs/services/', LocationController::class);
Route::apiResource('report/rs/services/os', OSController::class);
Route::apiResource('report/rs/services/{item}/port', LocationController::class);
Route::apiResource('report/rs/services/{item}/network', LocationController::class);

