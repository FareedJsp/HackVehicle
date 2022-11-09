<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MaintenanceController;

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

Route::get('/getdriver',[DriverController::class, 'getdriver']);

Route::get('/getdataMaintenance',[MaintenanceController::class, 'getdataMaintenance']);
Route::post('/adddataMaintenance',[MaintenanceController::class, 'adddataMaintenance']);
Route::PUT('/updatedataMaintenance',[MaintenanceController::class, 'updatedataMaintenance']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
