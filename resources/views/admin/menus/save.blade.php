@extends('layoutadmin')
@section('content')
<main>
<div class="container">
  <h3>Formulario de Menus</h3>
	<div class="row">
    @if($menu->id == null)
       <form class="col s12" action="{{ url ('/admin/menus') }}" method="POST" accept-charset="UTF-8" >
    @else
       <form class="col s12" action="{{ url ('/admin/menus/'.$menu->id ) }}" method="POST" accept-charset="UTF-8" >
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="col s6">
          <i class="material-icons prefix">label</i>
          <input  type="text" name="descripcion" value="{{$menu->descripcion}}">
          <label for="icon_prefix">Descripción</label>
          @if($errors->first('descripcion'))
          <i class="red-text">{{$errors->first('descripcion')}}</i>
          @endif
        </div>
        <div class="col s6">
          <i class="material-icons prefix">visibility</i>
          <input type="text"  name="url"  value="{{$menu->url}}">
          <label for="icon_telephone">Url</label>
          @if($errors->first('url'))
          <i class="red-text">{{$errors->first('url')}}</i>
          @endif
        </div>
      <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
           <i class="material-icons right">send</i>
        </button>
      </div>
	</div>
</div>
</main>

@endsection