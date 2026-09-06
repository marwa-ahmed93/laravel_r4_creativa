

@extends('main')  

@section('body')

 <h2 class="text-center py-3"> Create Car  </h2>

 @include('layouts.errors')
<form action="{{route('car.store')}}" method="post" class="w-75 m-auto my-4" enctype="multipart/form-data">  
@csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Car Model</label>
    <input type="text" name="model" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Car Price </label>
    <input type="number" name="price" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">car Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

