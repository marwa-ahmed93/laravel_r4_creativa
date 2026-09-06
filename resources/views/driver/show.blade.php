
  @extends('main')  

@section('body')


<div class="container my-3">

<div class="card text-center">
  <div class="card-header">
    Deriver Details
  </div>
  <div class="card-body">
    <h4  class="card-title">Deriver id:  {{$driver?->id}}</h4>
    <h5 class="card-title">Deriver name: {{$driver?->name}}</h5>
    <p class="card-text">Deriver email: {{$driver?->email}}</p>
  </div>

</div>


</div>


@endsection



