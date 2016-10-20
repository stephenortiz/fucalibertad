@extends('layoutadmin')
@section('content')

<div class="container">
  <h5>Formulario de Empleados</h5>
	<div class="row">
    @if($employe->id == null)
       <form class="col s12" action="{{ url ('/admin/employees') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    @else
        
       <form class="col s12" action="{{ url ('/admin/employees/'.$employe->id ) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    @endif
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          @if($employe->id == null)
          <input id="icon_prefix" type="text"  name="nombre" value="{{old('nombre')}}">
          @else
          <input id="icon_prefix" type="text"  name="nombre" value="{{$employe->nombre}}">
          @endif     
          <label for="icon_prefix">Nombre</label>
          @if($errors->first('nombre'))
          <i class="red-text">{{$errors->first('nombre')}}</i>
          @endif
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          @if($employe->id == null)
          <input id="icon_telephone" type="text"  name="apellido"  value="{{old('apellido')}}">
          @else
          <input id="icon_telephone" type="text"  name="apellido"  value="{{$employe->apellido}}">
          @endif 
          <label for="icon_telephone">Apellido</label>
          @if($errors->first('apellido'))
          <i class="red-text">{{$errors->first('apellido')}}</i>
          @endif
        </div>

        <div class="input-field col s6">
          @if($employe->id != null && $employe->logo != '')
          <img class="circle responsive-img" src="{{ asset('storage/'.$employe->logo)}}" width="70">
          @endif
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">contacts</i>
          <input type="file" class="form-control" name="logo"  value="{{$employe->logo}}" >
          @if($errors->first('logo'))
          <i class="red-text">{{$errors->first('logo')}}</i>
          @endif
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">work</i>
          <input id="icon_telephone" type="text"  name="cargo"   value="{{$employe->cargo}}">
          <label for="icon_telephone">Cargo</label>
          @if($errors->first('cargo'))
          <i class="red-text">{{$errors->first('cargo')}}</i>
          @endif
        </div>


    @if($employe->id == null)
     <input type="hidden" name="states_id" value="1">
     @else
     
     <div class="input-field col s12">
     <i class="material-icons prefix">view_column</i>

     <select name="states_id">
                <option value="" disabled="disabled">Selección Una Opción</option>
                @foreach($states as $state)

                @if($state->id == $employe->states_id)
                <option value="{{$state->id}}" selected="selected">{{$state->descripcion}}</option>
                @else
                <option value="{{$state->id}}" >{{$state->descripcion}}</option>
                @endif

                @endforeach

      </select>

      <label for="textarea1">Estado</label>
     </div>

    @endif

         <div class="input-field col s12">
          <i class="material-icons prefix">view_column</i>
            <select name="repertorys_id">
                @if($employe->id == null)
                 <option value="" disabled="disabled" selected="selected" >Selección Una Opción</option>
                 @else
                 <option value="" disabled="disabled"  >Selección Una Opción</option>
                @endif
               
                @foreach($repertorys as $repertory)
                
                 @if($employe->id == null)
                        <option value="{{$repertory->id}}">{{$repertory->descripcion}}</option>
                 @else

                     @if($repertory->id == $employe->repertorys_id)
                        <option value="{{$repertory->id}}" selected="selected">{{$repertory->descripcion}}</option>
                     @else
                        <option value="{{$repertory->id}}" >{{$repertory->descripcion}}</option>
                     @endif
                  

                 @endif

                @endforeach
            </select>
             <label for="textarea1">Categoria</label>
            @if($errors->first('repertorys_id'))
            <i class="red-text">{{$errors->first('repertorys_id')}}</i>
            @endif
         </div>

        <div class="center col s12">
        <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
           <i class="material-icons right">send</i>
        </button>
      </div>
      </div>
    </form>

  </div>
</div>

@endsection