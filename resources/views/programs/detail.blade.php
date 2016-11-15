@extends('layout')
@section('content')

<div class="container">
    <div class="section">
      <div class="row">

      <div class="col  s12 center">
      @if($program->imagen == null)
                        <img src="//placehold.it/800x450/FF9800/EE00BB">
              @else
                        <img src="{{ asset('storage/'.$program->imagen)}}">
              @endif
      </div>

      <div class="left col s12">
      <h4> {{$program->titulo}}<h4>
      </div>

      <div class="left col s12" >
      {!!$program->descripcion!!}
      </div>

       <div class="col s12">

      @if(!$program->content_id->isEmpty())

        @foreach($program->content_id as $detail)

       
         <ul class="collapsible" data-collapsible="expandable">
          <li>
           <div class="collapsible-header"><i class="material-icons">label_outline</i>{{$detail->titulo}}</div>
           <div class="collapsible-body"><p>{{$detail->descripcion}}</p></div>
          </li>
         </ul>

        

        @endforeach

      @endif

       </div>

      </div>

     </div>

</div>


@endsection