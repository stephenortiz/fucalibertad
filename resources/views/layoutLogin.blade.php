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

  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>

     </head>

     <body>
     	
@yield('content')
     </body>

</html>