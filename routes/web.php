<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PetrolController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CalendarController;
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
    return view('home');
});

//User

Route::get('/driver',[UserController::class,'index'])->name('driver');
Route::get('/adddriver',[UserController::class,'create']);
Route::post('/insertdriver',[UserController::class,'store']);

Route::get('/checkgdriver',[UserController::class,'check']);

//User as Driver

Route::get('/drivercard',[UserController::class,'indexCard']);
Route::get('/editdriver/{id}',[UserController::class,'edit']);
Route::post('/updatedriver/{id}',[UserController::class,'update']);
Route::get('/deletedriver/{id}',[UserController::class,'destroy']);

Route::get('/driveravailable',[UserController::class,'available']);
Route::get('/drivernotavailable',[UserController::class,'notavailable']);


//Vehicle

Route::get('/vehicle',[VehicleController::class,'index'])->name('vehicle');
Route::get('/addvehicle',[VehicleController::class,'create']);
Route::post('/insertvehicle',[VehicleController::class,'store']);
Route::get('/editvehicle/{id}',[VehicleController::class,'edit']);
Route::post('/updatevehicle/{id}',[VehicleController::class,'update']);
Route::get('/deletevehicle/{id}',[VehicleController::class,'destroy']);

Route::get('/showmaintenance/{id}',[VehicleController::class,'showM']);
Route::get('/showwreckage/{id}',[VehicleController::class,'showW']);

Route::get('/detail/{id}',[VehicleController::class,'front']);

Route::get('/vehicletest',[VehicleController::class,'indextest']);

Route::get('/vehicleavailable',[VehicleController::class,'available']);
Route::get('/vehiclenotavailable',[VehicleController::class,'notavailable']);

//Maintenance

Route::get('/maintenance',[MaintenanceController::class,'index'])->name('maintenance');
Route::get('/addmaintenance',[MaintenanceController::class,'create']);
Route::post('/insertmaintenance',[MaintenanceController::class,'store']);
Route::get('/editmaintenance/{id}',[MaintenanceController::class,'edit']);
Route::post('/updatemaintenance/{id}',[MaintenanceController::class,'update']);
Route::get('/deletemaintenance/{id}',[MaintenanceController::class,'destroy']);

//Petrol

Route::get('/petrol',[PetrolController::class,'index'])->name('petrol');
Route::get('/addpetrol',[PetrolController::class,'create']);
Route::post('/insertpetrol',[PetrolController::class,'store']);
Route::get('/editpetrol/{id}',[PetrolController::class,'edit']);
Route::post('/updatepetrol/{id}',[PetrolController::class,'update']);
Route::get('/deletepetrol/{id}',[PetrolController::class,'destroy']);

// --Petrol extra

Route::get('/dashboard',[PetrolController::class,'indexDashboard']);
Route::get('/gas', function () {
    return view('petrol.gas');
});

//TotalPetrol

Route::get('/totalpetrol',[TotalPetrolController::class,'index']);
Route::get('/showgas',[TotalPetrolController::class,'thismonthindex']);
Route::get('/showpetrol/{id}',[TotalPetrolController::class,'showP']);
Route::get('/showbymonth/{id}',[TotalPetrolController::class,'show']);

//Wreckage

Route::get('/wreckage',[WreckageController::class,'index'])->name('wreckage');
Route::get('/addwreckage',[WreckageController::class,'create']);
Route::post('/insertwreckage',[WreckageController::class,'store']);
Route::get('/editwreckage/{id}',[WreckageController::class,'edit']);
Route::post('/updatewreckage/{id}',[WreckageController::class,'update']);
Route::get('/deletewreckage/{id}',[WreckageController::class,'destroy']);

/////////////////test///////////////////

Route::get('/testonly',[TestController::class,'index'])->name('testpage');
Route::get('/addtest',[TestController::class,'create']);
Route::post('/inserttest',[TestController::class,'store']);
Route::get('/edittest/{id}',[TestController::class,'edit']);
Route::post('/updatetest/{id}',[TestController::class,'update']);
Route::get('/deletetest/{id}',[TestController::class,'destroy']);

Route::get('/addautotest',[TestController::class,'autocreate']);
Route::post('/insertautotest',[TestController::class,'autostore']);

//////////////////////test///////////////

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user
Route::get('/user',[UserController::class,'name']);

//Extra Function

//Full Calendar

Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('/events', [CalendarController::class, 'save'])->name('events.save');
Route::post('/events/{id}', [CalendarController::class, 'update'])->name('events.update');


//Other Test

Route::get('/testbtn', function () {
    return view('testbutton');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/test3', function () {
    return view('test3');
});

Route::get('/token', function () {
    echo csrf_token(); 

  });