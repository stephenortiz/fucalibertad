@extends('layout')
@section('content')

<div class="container contact">  
    <h3>Contactenos</h3>
    <hr>
    <div class="row">
        <form class="col s12 m6 l6" action="{{ url ('/contacto') }}" method="POST" accept-charset="UTF-8" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="input-field col s6">    
                    <i class="material-icons prefix">contacts</i>
                     <input class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ingrese Nombre" name="nombre" value="{{old('nombre')}}">                    
                        @if($errors->first('nombre'))
                        <i class="red-text">{{$errors->first('nombre')}}</i>
                        @endif
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">contact_phone</i>
                     <input class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ingrese Telefono" name="telefono" value="{{old('telefono')}}"> 
                     @if($errors->first('telefono'))
                     <i class="red-text">{{$errors->first('telefono')}}</i>
                     @endif
                </div>

            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">Asunto</i>
                     <input  class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ingrese Asunto"  name="subject" value="{{old('subject')}}">
                        @if($errors->first('subject'))
                     <i class="red-text">{{$errors->first('subject')}}</i>
                     @endif
                </div>

            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                     <input class="tooltipped" data-position="top" data-delay="50" data-tooltip="Ingrese E-Mail" name="email"  value="{{old('email')}}">
                        @if($errors->first('email'))
                     <i class="red-text">{{$errors->first('email')}}</i>
                     @endif
                </div>
            </div>


            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">message</i>
                    <textarea class="tooltipped"  data-position="top" data-delay="50" data-tooltip="Ingrese Mensaje"  name="descripcion" class="materialize-textarea">{{old('descripcion')}}</textarea>
                    
                     @if($errors->first('descripcion'))
                     <i class="red-text">{{$errors->first('descripcion')}}</i>
                     @endif
                </div>
            </div>

            <div class="row center">
            <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
             <i class="material-icons right">send</i>
            </button>
            </div>


        </form>
        <div class="col s12 m6 l6 contact-holder">
            <h6 class="mdi-action-home">Dirección</h6>
            <p><strong>{{$company->direccion}}</strong><br></p>
            <h6 class="mdi-action-home">Telefono</h6>
            <p><strong>{{$company->telefono}}</strong><br></p>
            <h6 class="mdi-hardware-phone-android">E-mail</h6>
            <p><strong>{{$company->email}}</strong></p>
            
        </div>

       
          

    </div>
</div>  

@endsection