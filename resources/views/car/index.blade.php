@extends('main')


@section('body')

<div class=" w-50 m-auto text-center my-3 p-2"> <a class="btn btn-info w-100"  href="{{route('car.create')}}">Create</a></div>


<div class="row">
@foreach($cars as $car)

<div class="col-md-4">
    <div>
     <img class="w-100" src="{{asset('storage/'.$car->image)}}" alt="">
     <h2>Model: {{$car->model}}</h2>
     <h3>Price: {{$car->price}}</h3>
    </div>
</div>

@endforeach

</div>



@endsection