@extends('layout')
@section('content')
<style type="text/css">
	body{
	background:#1F1F1F url(../images/pattern.png) repeat top left;
	color:#fff;
	font-family: 'PT Sans Narrow', Arial, sans-serif;
	font-size:14px;
}
</style>

<div class="container ">
 <br>
     <div class="row ">

     <h2>Nosotros!</h2>
@foreach($contents as $content)
        <div class="col m4 s4" >
              <hr>
	          <img class="materialboxed bordered z-depth-5" width="100%" height="100%" src="{{ asset('storage/'.$content->imagen)}}" >
	          <hr>
        </div>
@endforeach
     </div>  
     <div class="center">{!! $contents->render() !!}</div>
  
</div>


@endsection