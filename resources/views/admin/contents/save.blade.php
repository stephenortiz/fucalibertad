@extends('layoutadmin')
@section('content')
<main>
     <div class="container">
 	     <div class="row">

 	     <h3>Formulario de contenidos</h3>

    @if($content->id == null)
       <form class="col s12" action="{{ url ('/admin/contents') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    @else
        
       <form class="col s12" action="{{ url ('/admin/contents/'.$content->id ) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    @endif
          <input type="hidden" name="_token" value="{{ csrf_token() }}">



          <div class="col s12"> 
             <div class=" col s12">
             <label>titulo</label>
             @if($content->id == null)
             <input  id="first_name2" type="text"  name="titulo" value="{{old('titulo')}}">
             @else
             <input  id="first_name2" type="text"  name="titulo" value="{{$content->titulo}}">
             @endif
             </div>
             @if($errors->first('titulo'))
             <i class="red-text">{{$errors->first('titulo')}}</i>
             @endif
          </div>

        
          <div class="col s12"> 
             <div class=" col s12">
             <label>Descripción</label>
             @if($content->id == null)
             <textarea id="editor1"  name="descripcion" class="materialize-textarea ckeditor">{{old('descripcion')}}</textarea>
             @else
             <textarea id="editor1"  name="descripcion" class="materialize-textarea  ckeditor">{{$content->descripcion}}</textarea>
             @endif
             </div>
             @if($errors->first('descripcion'))
             <i class="red-text">{{$errors->first('descripcion')}}</i>
             @endif
          </div>

           <div class="input-field col s6">
           @if($content->id != null)
           <img class="circle responsive-img" src="{{ asset('storage/'.$content->imagen)}}" width="70">
           @endif
           </div>

           <div class="input-field col s6">
              <i class="material-icons prefix">contacts</i>
             <input type="file" class="form-control" name="imagen" >
           </div>

           <div class="input-field col s12">
           <br>
           <label>Categoria</label>
           </div>

           <div class="input-field col s12">

             <select class="browser-default" name="categories_id">
                <option value="" disabled="disabled">Selección Una Opción</option>
                @foreach($categories as $category)

                @if($category->id == $content->categories_id)
                <option value="{{$category->id}}" selected="selected">{{$category->descripcion}}</option>
                @else
                <option value="{{$category->id}}" >{{$category->descripcion}}</option>
                @endif

                @endforeach
            </select>
           </div>
           <div class="input-field col s12">
           <br>
           <label>Menú</label>
           </div>

           <div class="input-field col s12">
             <select class="browser-default" name="repertorys_id">
                <option value="" disabled="disabled">Selección Una Opción</option>
                @foreach($repertorys as $repertory)

                @if($repertory->id == $content->repertorys_id)
                <option value="{{$repertory->id}}" selected="selected">{{$repertory->descripcion}}</option>
                @else
                <option value="{{$repertory->id}}" >{{$repertory->descripcion}}</option>
                @endif

                @endforeach
            </select>

           </div>

           <div class="col s12"> 
             <div class=" col s12">
             <label>Ur<llabel>
             @if($content->id == null)
             <textarea id="textarea1" name="url" class="materialize-textarea">{{old('url')}}</textarea>
             @else
             <textarea id="textarea1" name="url" class="materialize-textarea">{{$content->url}}</textarea>
             @endif
             </div>
             @if($errors->first('url'))
             <i class="red-text">{{$errors->first('url')}}</i>
             @endif
          </div>
         

          <div class="center col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
              <i class="material-icons right">send</i>
            </button>
          </div>

          </form>

 	     </div>

 	 </div>

</main>
@endsection