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
        </div>
      </li>
    

   @endforeach
    </ul>
</div>
@endif

   

@if(@texts != null)
@foreach($texts as $text)
   
<div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>{{$text->titulo}}</h4>
          <p class="center-align light">
            {!!$text->descripcion!!}
          </p>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endif

@if($blogs != null)
<div class="container">
   
     <div class="row">
@foreach($blogs as $blog)

<div class="col s12 m4">
   
     <div class="card medium">

                    <div class="card-image">
                        <img src="{{ asset('storage/'.$blog->imagen)}}">
                        <span class="card-title ">{{$blog->titulo}}</span>
                    </div>
                    <div class="card-content">
                        <p>{!! str_limit($blog->descripcion, 150) !!} </p>
                       
                    </div>
                    <div class="card-action">
                        <a href="{{url('blog/'.$blog->id)}}" class="blue-text text-darken-2">Saber mas.</a>
                    </div>

     </div>

</div>


@endforeach
<div class="col s12">
{!!  $blogs->render() !!}
</div>
</div>
</div>
@endif

<div class="container">

      <div class="video-container">
        <iframe width="853" height="480" src="https://www.youtube.com/embed/nHsJrwP3Oyo" frameborder="0" allowfullscreen></iframe>
      </div>
</div>   



 
              
@endsection


