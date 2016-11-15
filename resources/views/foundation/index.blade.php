@extends('layout')
@section('content')

<div class="container">
   
      <div class="row">
      <br>
{{--*/ $contador = 0 /*--}}
@foreach($contents as $content)
@if($content->categories_id == 1)

      {{--*/ $contador = $contador +1  /*--}}

      @if($contents->count() > $contador)
         <div class="col s12 m6">
      @else
         <div class="col s12 m12">
      @endif
    
      

      <h5>{{$content->titulo}}</h5>
        <div class="card-panel teal">
          <span class="white-text"> {!!$content->descripcion!!}</span>
         
        </div>
      </div>

   
@endif

@endforeach

@foreach($employees as $employee)


        <div class="col s12 m4">
          <div class="card large card blue-grey darken-1">
            <div class="card-image">
              <img src="{{ asset('storage/'.$employee->logo)}}">

              <span class="card-title black-text text-darken-2"> </span>
            </div>
            <div class="card-content">
              <p>{!! $employee->descripcion !!}</p>
            </div>
            <div class="card-action">
            {{$employee->nombre}} {{$employee->apellido}}
            <br>
            <i><strong>{{$employee->cargo}}</strong></i>
            </div>
          </div>
        </div>



 


@endforeach

  </div>
   
  </div>


@endsection