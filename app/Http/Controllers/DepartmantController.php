<?php

namespace App\Http\Controllers;

use App\Models\Departmant;
use Illuminate\Http\Request;

class DepartmantController extends Controller
{
    public function index(){
      // $depart  =  Departmant::find(1)->employee();
      $depart = Departmant::with('employee')->get();
      dd($depart);
    }
}
