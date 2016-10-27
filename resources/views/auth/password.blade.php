@extends('layoutLogin')

@section('content')

<main>
    <center>
      <img class="responsive-img" style="width: 100px;" src="{{ asset('img/logoFundacion.png')}}" />
      <div class="section"></div>

      <h5 class="indigo-text">Restablecer Contraseña</h5>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="{{ asset('password/email')}}" method="POST" accept-charset="UTF-8">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
              @if($errors->first('email'))
                <i class="red-text">{{$errors->first('email')}}</i>
                @endif
                <input class='validate' type='email' name='email' id='email' />
              </div>
                
               <label for='email'>Ingrese su correo</label>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
              </div>
            </div>

            <br/>
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect '>Restablecer</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>
  </main>




@endsection