@extends('layout')
@section('content')

<div class="container">
   
      <div class="row">
      <br>
@foreach($contents as $content)
@if($content->categories_id == 1)



   
        <div class="col m12 s12 center">
          <h5 class="blue-text text-darken-2"> {{$content->titulo}}</h5>
          
          <div class="card-panel grey lighten-5">
            
          	 {!!$content->descripcion!!}
          
         </div>
        </div>
    
@endif

@endforeach

@foreach($employees as $employee)
  <div class="col s12 m4">
    <h5 class="header">{{$employee->nombre}} {{$employee->apellido}}</h5>
    <div class="card horizontal">
      <div class="card-image">
        <img src="{{ asset('storage/'.$employee->logo)}}">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <i>{{$employee->cargo}}</i>
        </div>
      </div>
    </div>
  </div>


@endforeach

  </div>
   
  </div>


@endsection