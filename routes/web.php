<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DepartmantController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/greeting', function () {
//     return 'Hello World';
// });


Route::get('/welcome',function(){
return view('hello');
});

// Route::view('/welcome','hello');

// Route::redirect('/here' , '/welcome');


// Route::get('/user/{name?}',function($id=null){
//  return "Welcome $id";
// })->where('name', '[A-Za-z]+');


// Route::post('/user' , function(Request $request){
// dd($request);
// });


// Route::post('/server', ProvisionServer::class);

// Route::middleware(CheckRole::class)->group(function(){
// Route::controller(UserController::class)->group(function()  {

// // Route::prefix('admin')->group(function(){

// Route::get('/user', 'index')->name('user.index');

// Route::get('/user/create', 'create')->name('user.create');
// Route::post('/user/store', 'store')->name('user.store');
// // });

// });


/***************************  User **************************************************** */

Route::controller(UserController::class)->group(function(){

    Route::get('/user', 'index')->name('user.index');
    Route::get('/user/create', 'create')->name('user.create');
    Route::post('/user/store', 'store')->name('user.store');
    Route::get('user/show/{id}','show')->name('user.show');

});




/****************************  Driver ************************************************ */
Route::controller(DriverController::class)->group(function(){
   
Route::get('/drivers', 'index')->name('drivers.index');

Route::get('/drivers/create', 'create')->name('drivers.create');
Route::post('/drivers/store', 'store')->name('drivers.store');

Route::get('driver/show/{id}' , 'show')->name('driver.show');


});




/***************************** Car  ******************************************* */

Route::get('/cars' , [CarController::class , 'index'])->name('car.index');
Route::get('/car/create' , [CarController::class , 'create'])->name('car.create');
Route::post('/car/store' , [CarController::class , 'store'])->name('car.store');
Route::get('/car/delete/{id}' , [CarController::class , 'delete'])->name('car.delete');







/***************************** Department  ******************************************* */

Route::get('/depart' , [DepartmantController::class , 'index'])->name('depart.index');
// Route::get('/car/create' , [CarController::class , 'create'])->name('car.create');
// Route::post('/car/store' , [CarController::class , 'store'])->name('car.store');
// Route::get('/car/delete/{id}' , [CarController::class , 'delete'])->name('car.delete');