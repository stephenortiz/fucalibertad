@extends('layoutadmin')
@section('content')
     <div class="container">
 	     <div class="row">

 	           <h3>Formulario de detalle</h3>

 	           @if($detail->id == null)
               <form class="col s12" action="{{ url ('/admin/details') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
               @else
        
               <form class="col s12" action="{{ url ('/admin/details/'.$detail->id ) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
               @endif

               <input type="hidden" name="_token" value="{{ csrf_token() }}">

               <div class="col s12"> 
                  <div class=" col s12">
                  <label>titulo</label>
                  @if($detail->id == null)
                  <input  id="first_name2" type="text"  name="titulo" value="{{old('titulo')}}">
                  @else
                  <input  id="first_name2" type="text"  name="titulo" value="{{$detail->titulo}}">
                  @endif
                  </div>
                  @if($errors->first('titulo'))
                  <i class="red-text">{{$errors->first('titulo')}}</i>
                  @endif
              </div>

              <div class="col s12"> 
                  <div class=" col s12">
                  <label>Descripción</label>
                  @if($detail->id == null)
                  <textarea id="textarea1" name="descripcion" class="materialize-textarea">{{old('descripcion')}}</textarea>
                  @else
                  <textarea id="textarea1" name="descripcion" class="materialize-textarea">{{$detail->descripcion}}</textarea>
                  @endif
                  </div>
                  @if($errors->first('descripcion'))
                  <i class="red-text">{{$errors->first('descripcion')}}</i>
                  @endif
             </div>

             <div class="input-field col s12">
             <select class="browser-default" name="contents_id">
                 
        
             
                <option value="" >Selección Una Opción</option>
                @foreach($contents as $content)
                
                @if($detail->contents_id != null)

                @if($content->id == $detail->contents_id)


                <option value="{{$content->id}}" data-icon="{{ asset('storafe/'.$content->imagen) }}" selected="selected">{{$content->id}} || {{$content->titulo}} || {{$content->descripcion}}</option>
                @else
                <option value="{{$content->id}}"  >{{$content->id}} || {{$content->titulo}} || {{$content->descripcion}}</option>
                @endif
                 
               

              @else

              <option value="{{$content->id}}"  >{{$content->id}} || {{$content->titulo}} || {{$content->descripcion}}</option>

              @endif

               @endforeach



            </select>
             @if($errors->first('contents_id'))
                  <i class="red-text">{{$errors->first('contents_id')}}</i>
                  @endif
            </div>

              <div class="input-field col s6">
               <br>
               <label>Imagen</label>
              </div>

              <div class="input-field col s6">
               <i class="material-icons prefix">contacts</i>
               <input type="file" class="form-control" name="imagen" >
              </div>

            

           </div>
            <div class="col s12"> 
            <hr>
            </div>

                             <div class="center col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
              <i class="material-icons right">send</i>
            </button>
          </div>

               </form>
 	     </div>

 	 </div>

@endsection