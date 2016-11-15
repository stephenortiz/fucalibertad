<!DOCTYPE html>
<html lang="es">

     <head>
     
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- faivicon -->
         <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
         <!-- Css -->
         <link href="{{ asset('materializecss/css/materialize.min.css') }}" rel="stylesheet">
	       <title>Fundación Camino De Libertad</title>    
	       <!-- Fonts -->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- js, css galeria -->
        <!--
         <link rel="stylesheet" type="text/css" href="{{ asset('gallery/css/demo.css')}}" />
         <link rel="stylesheet" type="text/css" href="{{ asset('gallery/css/style.css')}}" />
         <link rel="stylesheet" type="text/css" href="{{ asset('gallery/css/elastislide.css')}}" />
-->

     </head>

     <body>

        <nav class="grey lighten-2" role="navigation">
    <div class="nav-wrapper container">
       <a href="/" class="brand-logo responsive-img"><img src="{{ asset('img/logoFundacion.png')}}" width="70"></a>
      @foreach ($repertorys as $repertory)
                 <ul class="right hide-on-med-and-down">
                  <li>
                         <a href="{{$repertory->url}}" class="blue-text text-darken-1">{{$repertory->descripcion}}</a>
                 </li>

                 </ul>
      @endforeach


      <ul id="nav-mobile" class="side-nav grey lighten-3">
      <header class="demo-drawer-header center">
          <img src="{{ asset('img/logoFundacion.png') }}" class="demo-avatar" width="50%">
        </header>
      @foreach ($repertorys as $repertory)
        <a href="{{$repertory->url}}" class="blue-text text-darken-1">{{$repertory->descripcion}}</a>
      @endforeach
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons blue-text">menu</i></a>
    </div>
  </nav>

@yield('content')

         <footer class="page-footer blue darken-3">

            <div class="container">
            <div class="row">
                <div class="col m4 s12">
                <h5 class="white-text">Redes Sociales</h5>
                <ul>
                  <li>
                  <a href="https://www.facebook.com/Fundacioncaminodelibertad" class="brand-logo"><img src="{{ asset('img/facebook-icon.png')}}" ></a>
                   <a href="https://www.facebook.com/fucalibertad" class="brand-logo"><img src="{{ asset('img/facebook-icon2.png')}}" ></a>
                  </li>

                </ul>
              </div>
              <div class="col m4  s12">
                <h5 class="white-text">Contacto</h5>
                <ul>
                  <li><a href="mailto:{{$company->email}}" target="_top">Email: {{$company->email}}</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Dirrección: {{$company->direccion}}</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Telefono: {{$company->telefono}}</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Celular: {{$company->celular}}</a></li>
                  
                </ul>
              </div>
              <div class="col m4  s12">
                <h5 class="white-text">Portal</h5>
                <ul>
                @if(Auth::guest())
                  <li>
 <a class="tooltipped"  data-position="top" data-delay="50" data-tooltip="Ingresar Al Portal" href="{{asset('auth/login')}}"><i class="large material-icons">supervisor_account</i></a>
                  </li>
                @else
                 <li>
<a class="tooltipped"  data-position="top" data-delay="50" data-tooltip="Ingresar Al Portal" href="{{asset('admin/welcome')}}"><i class="large material-icons">supervisor_account</i></a>
                 </li>
                @endif
                </ul>
              </div> 

            </div>
          </div>

             <div class="footer-copyright">
                 <div class="container">
                     <div class="center">

                       Todos los derechos reservados Fundación Camino De Libertad.
    
                     </div>
                </div>
             </div>

         </footer>

         <!--galeria-->
<!--
         <script type="text/javascript" src="{{asset('gallery/jquery.tmpl.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('gallery/jquery.easing.1.3.js')}}"></script>
         <script type="text/javascript" src="{{asset('gallery/jquery.elastislide.js')}}"></script>
         <script type="text/javascript" src="{{asset('gallery/gallery.js')}}"></script>
-->
         <script type="text/javascript" src="{{asset('materializecss/js/jquery-2.1.1.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('materializecss/js/materialize.min.js')}}"></script>
       <!--  <script type="text/javascript" src="{{asset('materializecssjs/init.js')}}"></script> -->

           <script type="text/javascript">
  
           //inicializar el SideNav
           $(".button-collapse").sideNav();

           $(document).ready(function(){

            //Slider propiedades
            $('.slider').slider({
            full_width: true,
            invertal: 1000,
            indicators:false});

            Materialize.updateTextFields();

            $('.modal-trigger').leanModal();

            $('.collapsible').collapsible();

            });

           </script>


     </body>

</html>