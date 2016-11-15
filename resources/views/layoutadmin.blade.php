<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Fundacion Camino de libertad ">
    <title>Panel Administrador</title>
    <!-- faivicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- CSS-->
    <link href="{{ asset('materializecss/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/material.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="{{ asset('modal/normalize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('modal/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header  mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row ">
          <span class="mdl-layout-title">Usuario : {{Auth::user()->name}}</span>
          <div class="mdl-layout-spacer"></div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item"><a href="{{ asset('auth/logout')}}"> Salir</a></li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="{{ asset('img/logoFundacion.png') }}" class="demo-avatar" width="100%">
        </header>


        <nav class="demo-navigation mdl-navigation blue-grey darken-4 center">
          <a href="/admin/contents" class="mdl-navigation__link ">Contenido</a>
          <a href="/admin/details" class="mdl-navigation__link ">Detalle Contenido</a>
          <a href="/admin/employees" class="mdl-navigation__link ">Empleados</a>
          <a href="/admin/categories" class="mdl-navigation__link ">Categorias</a>
          <a href="/admin/companys" class="mdl-navigation__link ">Empresa</a>
          <a href="/admin/menues" class="mdl-navigation__link ">Menus</a>

        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">

@yield('content')

        </div>
      </main>
    </div>


    <!-- ckeditor -->

    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>


    <script type="text/javascript" src="{{asset('materializecss/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('materializecss/js/materialize.js')}}"></script>
    <script src="{{asset('admin/js/material.min.js')}}"></script>
    <script src="{{asset('modal/index.js')}}"></script>
    <script type="text/javascript">
  
    $(document).ready(function() {
       $('select').material_select();
    });
        
    </script>

    <script type="text/javascript">
       $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
       $('.modal-trigger').leanModal();
      });
    </script>


  </body>
</html>