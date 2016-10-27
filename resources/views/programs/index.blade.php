@extends('layout')
@section('content')

<div class="container">
   
      <div class="row">
      <br>

@foreach($contents as $content)
@if($content->categories_id == 1)



   
        <div class="col m12 s12 ">
          <h5 class="blue-text text-darken-2"> {{$content->titulo}}</h5>
          
          <div class="card-panel grey lighten-5">
            
          	 {!!$content->descripcion!!}
          
         </div>
        </div>
    
@endif

@endforeach	


      </div>
</div>

@endsection