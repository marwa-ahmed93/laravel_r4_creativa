

@extends('main')

@section('body')


<div class="container my-3">

<div class=" w-50 m-auto text-center my-3 p-2"> <a class="btn btn-info w-100"  href="{{route('drivers.create')}}">Create</a></div>



      <table class="table table-dark table-striped">
  
  <thead>
    <th>index</th>
    <th>name</th>
    <th>email</th>
    <th>Show</th>
  </thead>

<tbody>

    @foreach($drivers as $driver)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$driver->name }}</td>
        <td>{{$driver->email }}</td>
        <td><a class="btn btn-info" 
        href="{{route('driver.show',
        $driver->id)}}">Show</a></td>
    </tr>
    @endforeach
</tbody>


</table>
</div>

<div class=" w-50 m-auto">
  {{$drivers->links()}}</div>



  @endsection