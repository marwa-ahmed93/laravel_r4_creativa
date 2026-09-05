<?php

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




Route::controller(UserController::class)->group(function(){

    Route::get('/user', 'index')->name('user.index');
    Route::get('/user/create', 'create')->name('user.create');
    Route::post('/user/store', 'store')->name('user.store');
 
});

