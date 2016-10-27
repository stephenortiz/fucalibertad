@extends('layoutLogin')
@section('content')

  <main>
    <center>
      <img class="responsive-img" style="width: 100px;" src="{{ asset('img/logoFundacion.png')}}" />

      <h5 class="indigo-text">Nueva Contraseña</h5>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

           <form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">


            <div class='row'>
              <div class='input-field col s12'>
              @if($errors->first('email'))
                <i class="red-text">{{$errors->first('email')}}</i>
                @endif
                 <input type="email" name="email" value="{{ old('email') }}">
              </div>
                
               <label for='email'>Ingrese su correo</label>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
               @if($errors->first('password'))
                <i class="red-text">{{$errors->first('password')}}</i>
                @endif
                  <input type="password" name="password">
              </div>

              <label for='password'>Nueva Contraseña</label>

            </div class='row'>

             <div class='row'>
              <div class='input-field col s12'>
               @if($errors->first('password_confirmation'))
                <i class="red-text">{{$errors->first('password_confirmation')}}</i>
                @endif      
                <input type="password" name="password_confirmation">
              </div>

              <label for='password'>Confirmar Contraseña</label>

            </div class='row'>
                         
            

            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect '>Reinciar Contraseña</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
  </main>




@endsection