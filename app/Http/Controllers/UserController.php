<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
       $users =  User::all();
    //    dd($users);
        return view('user.index',compact('users'));
    }


    public function create(){
        return view('user.create');
    }

public function store(Request $request){


    $validated = $request->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required',
        'password' => 'required|min:3|max:255'

    ]);

    User::insert([
'name'=> $validated['name'] ,
'email'=> $validated['email'] ,
'password'=> $validated['password'] ,

    ]);


    return redirect()->route('user.index');


}

}
