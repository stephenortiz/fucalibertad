@extends('layoutadmin')
@section('content')
        <div class="container">
          <div class="row">
             <div class="col s12 m9 l10">
                 <div id="input" class="section scrollspy">
                      <div class="row">

                      @if($category->id == null)
                        <form class="col s12" action="{{ url ('/admin/categories') }}" method="POST" accept-charset="UTF-8" >
                      @else
                        <form class="col s12" action="{{ url ('/admin/categories/'.$category->id ) }}" method="POST" accept-charset="UTF-8" >
                      @endif

                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="col s12">
                         <i class="material-icons prefix">account_circle</i>
                         <div class="input-field col s12">
                             <input  id="first_name2" type="text" name="descripcion" value="{{$category->descripcion}}">
                             <label class="active" for="first_name2">descrpción</label>
                        </div>
                        @if($errors->first('descripcion'))
                        <i class="red-text">{{$errors->first('descripcion')}}</i>
                        @endif
                      </div>

                      <div class="center">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                             <i class="material-icons right">send</i>
                       </button>
                      </div>

                 </div>
             </div>
          </div>
        </div>

@endsection