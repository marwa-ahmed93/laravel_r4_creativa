<?php

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