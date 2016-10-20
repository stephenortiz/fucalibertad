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



        <div class="col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text"  name="razonsocial" value="{{$company->razonsocial}}">
          <label for="icon_prefix">Razón Social</label>
          @if($errors->first('razonsocial'))
          <i class="red-text">{{$errors->first('razonsocial')}}</i>
          @endif
        </div>

         <div class="col s6">
          <i class="material-icons prefix">business</i>
          <input id="icon_telephone" type="text"   name="nit" value="{{$company->nit}}">
          <label for="icon_telephone">Nit</label>
           @if($errors->first('nit'))
          <i class="red-text">{{$errors->first('nit')}}</i>
          @endif
        </div>

        <div class="col s12">
          <i class="material-icons prefix">business</i>
          <input id="icon_telephone" type="text"   name="direccion" value="{{$company->direccion}}">
          <label for="icon_telephone">dirección</label>
           @if($errors->first('direccion'))
          <i class="red-text">{{$errors->first('direccion')}}</i>
          @endif
        </div>

        <div class="col s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel"  name="telefono" value="{{$company->direccion}}">
          <label for="icon_telephone">telefono</label>
          @if($errors->first('telefono'))
          <i class="red-text">{{$errors->first('telefono')}}</i>
          @endif
        </div>
        <div class="col s12">
          <i class="material-icons prefix">stay_current_portrait</i>
          <input id="icon_telephone" type="tel"  name="celular" value="{{$company->celular}}">
          <label for="icon_telephone">celular</label>
           @if($errors->first('celular'))
          <i class="red-text">{{$errors->first('celular')}}</i>
          @endif
        </div>
        <div class="col s12">
          <i class="material-icons prefix">email</i>
          <input id="icon_telephone" type="tel"  name="email" value="{{$company->email}}">
          <label for="email" data-error="wrong" data-success="right">Email</label>
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