<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    public function index(){
       $drivers =   Driver::paginate(10);    //ORM
    //$drivers =    DB::table('drivers')->get();   //query builder
    //   dd($drivers);
    return view('driver.index',compact('drivers'));
    }


    public function create(){
        return view('driver.create');
    }

  public function store(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required',
            'password' => 'required|min:3|max:255'

        ]);


        // DB::table('drivers')->insert([                 //create data using query builder
        //        'name' => $validated['name'],
        //     'email' => $validated['email'],
        //     'password' => $validated['password'],

        // ]);

        /////////////////////////////////////////////////////////////////////

        Driver::create([                                                //create data using ORM
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],

        ]);

        // $driver = new Driver();
        // $driver->name = $request->name;
        // $driver->email = $request->email;
        // $driver->password = $request->password;
        //   $driver->save();

        return redirect()->route('drivers.index');
    }



    public function show($id){
        // $driver = Driver::findOrFail($id) ;   //ORM
        $driver = DB::table('drivers')
        ->find($id);   //query builder
        return view('driver.show',
        compact('driver'));
    }

}
