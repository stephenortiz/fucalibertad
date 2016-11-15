@extends('layout')
@section('content')

<div class="container">
   
      <div class="row">
      <br>


<div class="col s12 valign-wrapper">
  <a href="{{asset('archive/Portafolio_de_Servicios.pdf')}}"  font-size: 50px><i class="large material-icons">archive</i></a>
  <strong>Nuestro Portafolio</strong>
</div>


@foreach($contents as $content)
@if($content->categories_id == 1)

       

<div class="col s12 m4">
        <div class="card medium">

         <div class="card-image">
              @if($content->imagen == null)
                        <img src="//placehold.it/800x450/FF9800/EE00BB">
              @else
                        <img src="{{ asset('storage/'.$content->imagen)}}">
              @endif
                        <span class="card-title black-text">{{$content->titulo}}</span>
                        </div>
                        <div class="card-content">
                        <p>{!! str_limit($content->descripcion, 100) !!} </p>
                       
                    </div>
                    <div class="card-action">
                          <a href="{{url('programa/'.$content->id)}}" class="blue-text text-darken-2">Saber mas.</a>
                    </div>
        
        </div>
            
</div>
       
    
@endif

@endforeach	


      </div>
</div>

@endsection