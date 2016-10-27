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
    </head>

<body>


<div class="container">
   <div class="row">
         <h4>Confirmación!</h4>
           <p>Tu mensaje ha sido enviado, pronto responderemos tu solicitud.</p>
           </div>
         
             <a href="{{ asset('/contacto') }}" class="waves-effect blue waves-light btn">volver</a>
   </div>
</div>
 
       

	

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