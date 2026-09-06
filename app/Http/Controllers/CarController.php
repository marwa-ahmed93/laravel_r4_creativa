<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
public function index(){
    $cars = Car::all();
    return view('car.index' ,['cars' => $cars]) ;
}


public function create(){
    return view('car.create');
}

public function store(Request $request){

  $validated = $request->validate([
        'model' => 'required|min:3|max:255',
        'price' => 'required',
        'image' => 'mimes:jpg,bmp,png'
    ]);

$image = Storage::put('avatar' ,$validated['image']);

    Car::create([
     'model' => $validated['model'] ,
     'price' => $validated['price'] ,
     'image' => $image 

    ]);

    return redirect()->route('car.index');


}

}
