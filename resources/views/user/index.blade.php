@extends('main')  

@section('body')



<div class="container mt-5">

<div class=" w-50 m-auto text-center my-3 p-2"> <a class="btn btn-primary w-100"  href="{{route('user.create')}}">Create</a></div>



    <div class="row " style="row-gap: 15px;">
        @foreach($users as $user)
        <div class="col-md-4">
            <div class="bg-info rounded text-center p-4">
                 <h3>User id:  {{$user->id}}</h3>
                 <h4>User Name:  {{$user->name}}</h4>
                 <span>User email:  {{$user->email}}</span>

            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection