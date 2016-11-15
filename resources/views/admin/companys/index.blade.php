@extends('layoutadmin')
@section('content')
<main>
<div class="container">
          <div class="row">
             <div class="col s12 m9 l10">
                 <div id="input" class="section scrollspy">
                      <div class="row">


  <h3>Formulario Compañia</h3>
  <div class="row">

      @foreach ($errors as $errr)
    <h1>error</h1>
    @endforeach

    @if(empty($company))
       <form class="col s12" action="{{ url ('/admin/companys') }}" method="POST" accept-charset="UTF-8" >
    @else
        
       <form class="col s12" action="{{ url ('/admin/companys/'.$company->id ) }}" method="POST" accept-charset="UTF-8" >
    @endif
    

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">


        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          @if($company->id == null)
          <input id="icon_prefix" type="text"  name="razonsocial" value="{{old('razonsocial')}}">
          @else
          <input id="icon_prefix" type="text"  name="razonsocial" value="{{$company->razonsocial}}">
          @endif     
          <label for="icon_prefix">Razón Social</label>
          @if($errors->first('razonsocial'))
          <i class="red-text">{{$errors->first('razonsocial')}}</i>
          @endif
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">vpn_key</i>
          @if($company->id == null)
          <input id="icon_prefix" type="text"  name="nit" value="{{old('nit')}}">
          @else
          <input id="icon_prefix" type="text"  name="nit" value="{{$company->nit}}">
          @endif     
          <label for="icon_prefix">Nit</label>
          @if($errors->first('nit'))
          <i class="red-text">{{$errors->first('nit')}}</i>
          @endif
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">business</i>
          @if($company->id == null)
          <input id="icon_prefix" type="text"  name="direccion" value="{{old('direccion')}}">
          @else
          <input id="icon_prefix" type="text"  name="direccion" value="{{$company->direccion}}">
          @endif     
          <label for="icon_prefix">Dirección</label>
          @if($errors->first('direccion'))
          <i class="red-text">{{$errors->first('direccion')}}</i>
          @endif
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          @if($company->id == null)
          <input id="icon_prefix" type="text"  name="telefono" value="{{old('telefono')}}">
          @else
          <input id="icon_prefix" type="text"  name="telefono" value="{{$company->telefono}}">
          @endif     
          <label for="icon_prefix">Telefono</label>
          @if($errors->first('telefono'))
          <i class="red-text">{{$errors->first('telefono')}}</i>
          @endif
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">stay_current_portrait</i>
          @if($company->id == null)
          <input id="icon_prefix" type="text"  name="celular" value="{{old('celular')}}">
          @else
          <input id="icon_prefix" type="text"  name="celular" value="{{$company->celular}}">
          @endif     
          <label for="icon_prefix">Celular</label>
          @if($errors->first('celular'))
          <i class="red-text">{{$errors->first('celular')}}</i>
          @endif
        </div>

        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          @if($company->id == null)
          <input id="icon_prefix" type="text"  name="email" value="{{old('email')}}">
          @else
          <input id="icon_prefix" type="text"  name="email" value="{{$company->email}}">
          @endif     
          <label for="icon_prefix">email</label>
          @if($errors->first('email'))
          <i class="red-text">{{$errors->first('email')}}</i>
          @endif
        </div>

      </div>
      <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
           <i class="material-icons right">send</i>
        </button>
       </div>

    </form>
        </div>
       </div>
      </div>
     </div>
    </div>
</div>

</main>
@endsection