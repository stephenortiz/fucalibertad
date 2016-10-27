@extends('layout')
@section('content')




@if($parallax != null)
<div class="slider">
    <ul class="slides">
   
   @foreach($parallax as $parallax)

     <li>
        <img src="{{ asset('storage/'.$parallax->imagen)}}">
        <div class="caption right-align">
          <h3 class= "black-text"></h3>
          <h4 class="light black-text text-lighten-3"></h5>
          <a class="waves-effect blue waves-light btn">Saber mas</a>
        </div>
      </li>
    

   @endforeach
    </ul>
</div>
@endif

   

   @foreach($contents as $content)
   


@if($content->categories_id != 6)

   <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>{{$content->titulo}}</h4>
          <p class="center-align light">
            {!!$content->descripcion!!}
          </p>
        </div>
      </div>
    </div>
  </div>
@endif

  @endforeach

 
              
@endsection


