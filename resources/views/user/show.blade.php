@extends('main')  

@section('body')



<div class="container mt-5">

<div class=" w-50 m-auto text-center my-3 p-2"> <a class="btn btn-primary w-100"  href="{{route('user.index')}}">Back</a></div>



    <div class="row  m-auto" style="row-gap: 15px;">
    
        <div class="col-md-4">
            <div class="bg-info rounded text-center p-4">
                 <h3>User id:  {{$user->id}}</h3>
                 <h4>User Name:  {{$user->name}}</h4>
                 <span>User email:  {{$user->email}}</span>
                 <span>User National_id:  {{$user->national_id->number_id}}</span>

            </div>
        </div>
     
    </div>
</div>


@endsection