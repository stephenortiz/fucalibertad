@extends('layoutadministrador')
@section('content')
  <main>
      <div class="container">
          <div class="row">
             <div class="col s12 m9 l10">
                 <div id="input" class="section scrollspy">
                      <div class="row">
                        <h1>Hola {{$user->name}}</h1>
                      </div>
                 </div>
             </div>
          </div>
       </div>
  </main>
@endsection


