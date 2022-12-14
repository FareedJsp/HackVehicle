<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WreckageController;
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
//Auth
Route::post('/driverlogin',[AuthApiController::class, 'login']);

//driver
Route::get('/getdriver',[DriverController::class, 'getdriver']);

//vehicle
Route::get('/getvehicle',[VehicleController::class, 'getvehicle']);

//Maintenance
Route::get('/getdataMaintenance',[MaintenanceController::class, 'getdataMaintenance']);
Route::post('/adddataMaintenance',[MaintenanceController::class, 'adddataMaintenance']);
Route::PUT('/updatedataMaintenance',[MaintenanceController::class, 'updatedataMaintenance']);

//Wreckage
Route::get('/getdataWreckage',[WreckageController::class, 'getdataWreckage']);
Route::post('/adddataWreckage',[WreckageController::class, 'adddataWreckage']);
Route::PUT('/updatedataWreckage',[WreckageController::class, 'updatedataWreckage']);

//Gas Data

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//test
Route::get('/checktest',[TestController::class, 'getdataTestonly']);
Route::post('/addtest',[TestController::class, 'adddataTestonly']);

Route::post('/addautotestapi',[TestController::class, 'addautodataTestonly']);