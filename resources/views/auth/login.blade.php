@extends('layoutLogin')

@section('content')

<div class="section"></div>
  <main>
    <center>
     
      <div class="section"></div>

      <h5 class="indigo-text blue-text">Cuenta de Administrador</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-4 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="{{ url ('/auth/login') }}" method="POST" accept-charset="UTF-8">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' />
                <label for='email'>Ingrese email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Ingrese Contraseña</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Ingresar</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

@endsection