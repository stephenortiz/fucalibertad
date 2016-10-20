@extends('layout')

@section('content')


<div class="section"></div>
  <main>
    <center>

      <h5 class="indigo-text blue-text">Registrar Cuenta</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-4 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 68px; border: 1px solid #EEE;">

          <form class="col s12" action="{{ url ('/auth/register') }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class='row'>
              <div class='col s12'>
                <input name='name' type='text' value="{{old('name')}}" />
                <label for='email'>Nombre Usuario</label>
                @if($errors->first('nombre'))
                <i class="red-text">{{$errors->first('nombre')}}</i>
                @endif
              </div>
            </div>

            <div class='row'>
              <div class='col s12'>
                <input type='email' name='email' value="{{old('email')}}" />
                <label for='password'>Email</label>
                @if($errors->first('email'))
                <i class="red-text">{{$errors->first('email')}}</i>
                @endif
              </div>
            </div>

            <div class='row'>
              <div class='col s12'>
                <input type='password' name='password'  />
                <label for='password'>Contraseña</label>
                @if($errors->first('password'))
                <i class="red-text">{{$errors->first('password')}}</i>
                @endif
              </div>
            </div>

            <div class='row'>
              <div class='col s12'>
                <input type='password' name='password_confirmation'  />
                <label for='password'>Confirmar Contraseña</label>
                @if($errors->first('password_confirmation'))
                <i class="red-text">{{$errors->first('password_confirmation')}}</i>
                @endif
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Registrar</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
 </main>
   


@endsection