<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PetrolController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WreckageController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\TotalPetrolController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/testbtn', function () {
    return view('testbutton');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});

Route::get('/main', function () {
    return view('layouts.main');
});

//Vehicle

Route::get('/vehicle',[VehicleController::class,'index'])->name('vehicle');
Route::get('/addvehicle',[VehicleController::class,'create']);
Route::post('/insertvehicle',[VehicleController::class,'store']);
Route::get('/editvehicle/{id}',[VehicleController::class,'edit']);
Route::post('/updatevehicle/{id}',[VehicleController::class,'update']);
Route::get('/deletevehicle/{id}',[VehicleController::class,'destroy']);

Route::get('/showmaintenance/{id}',[VehicleController::class,'show']);

Route::get('/vehicle.front/{id}',[VehicleController::class,'front']);

Route::get('/vehicletest', function () {
    return view('vehicle.test');
});

//Maintenance

Route::get('/maintenance',[MaintenanceController::class,'index'])->name('maintenance');
Route::get('/addmaintenance',[MaintenanceController::class,'create']);
Route::post('/insertmaintenance',[MaintenanceController::class,'store']);
Route::get('/editmaintenance/{id}',[MaintenanceController::class,'edit']);
Route::post('/updatemaintenance/{id}',[MaintenanceController::class,'update']);
Route::get('/deletemaintenance/{id}',[MaintenanceController::class,'destroy']);

//Driver

Route::get('/driver',[DriverController::class,'index'])->name('driver');
Route::get('/adddriver',[DriverController::class,'create']);
Route::post('/insertdriver',[DriverController::class,'store']);
Route::get('/editdriver/{id}',[DriverController::class,'edit']);
Route::post('/updatedriver/{id}',[DriverController::class,'update']);
Route::get('/deletedriver/{id}',[DriverController::class,'destroy']);

//Petrol

Route::get('/petrol',[PetrolController::class,'index'])->name('petrol');
Route::get('/addpetrol',[PetrolController::class,'create']);
Route::post('/insertpetrol',[PetrolController::class,'store']);
Route::get('/editpetrol/{id}',[PetrolController::class,'edit']);
Route::post('/updatepetrol/{id}',[PetrolController::class,'update']);
Route::get('/deletepetrol/{id}',[PetrolController::class,'destroy']);

Route::get('/gas', function () {
    return view('petrol.gas');
});

Route::get('/totalpetrol',[TotalPetrolController::class,'index']);
Route::get('/showgas',[TotalPetrolController::class,'thismonthindex']);
Route::get('/showpetrol/{id}',[TotalPetrolController::class,'show']);
Route::get('/dashboard',[PetrolController::class,'dashboardtotal']);

//Wreckage

Route::get('/wreckage',[WreckageController::class,'index'])->name('wreckage');
Route::get('/addwreckage',[WreckageController::class,'create']);
Route::post('/insertwreckage',[WreckageController::class,'store']);
Route::get('/editwreckage/{id}',[WreckageController::class,'edit']);
Route::post('/updatewreckage/{id}',[WreckageController::class,'update']);
Route::get('/deletewreckage/{id}',[WreckageController::class,'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user
Route::get('/user',[UserController::class,'name']);