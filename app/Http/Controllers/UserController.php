<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // $users =  User::all();             //ORM
       $users  =   DB::table('users')->get();    //query builder
            // dd($users);
        return view('user.index', compact('users'));
    }


    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required',
            'password' => 'required|min:3|max:255'

        ]);

        User::insert([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],

        ]);


        return redirect()->route('user.index');
    }


public function show($id){
 
 $user =   User::find($id)->first();

//  dd($user->national_id());
return view('user.show',['user' => $user]);

}


}
