@extends('layout')
@section('content')

<div class="container">
    <div class="section">
      <div class="row">

      <div class="col  s12 center">
      <img src="{{ asset('storage/'.$blog->imagen)}}">
      </div>

      <div class="left">
      	<h4>{{$blog->titulo}}</h4>
      </div>

      <div class="left">
      {!! $blog->descripcion !!}

      </div>

     </div>
     </div>
</div>

              
@endsection