@extends('layoutadmin')
@section('content')


     <div class="container">

       <br>
 	     <div class="row">

      <a href="{{ url ('admin/contents/create') }}" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
          <br>

        <table class="bordered responsive-table">
        <thead>
          <tr>
              <th data-field="id">Id</th>
              <th data-field="name">Titulo</th>
              <th data-field="name">Descripción</th>
              <th data-field="name">Imagen</th>
              <th data-field="name">Categoria</th>
              <th data-field="name">Menu</th>
              <th data-field="name">Url</th>
              <th>Detalles</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
        @foreach ($content as $contenido)
          <tr>
            <td>{{$contenido->id}}</td>
            <td>{{$contenido->titulo}}</td>
            <td>{{$contenido->descripcion}}</td>
            <td> 
            @if(!empty($contenido->imagen))
            <img class="circle responsive-img" src="{{ asset('storage/'.$contenido->imagen)}}" width="70">
            @endif
            </td>
            <td>{{$contenido->categories_id->descripcion}}</td>
            <td>{{$contenido->repertorys_id->descripcion}}</td>
            <td>{{$contenido->url}}</td>
            <td>
            @if(!$contenido->content_id->isEmpty())
            <a href="{{url('admin/details/'.$contenido->id.'/show')}}" class="large material-icons tooltipped"  data-position="top" data-delay="50" data-tooltip="visualizar detalles">visibility</a>
            <i class="tooltipped"  data-position="top" data-delay="50" data-tooltip="cantidad de detalles"> {{$contenido->content_id->count()}}</i>
            @endif
            </td>
            <td>
            <a href="{{url('admin/contents/'.$contenido->id.'/edit')}}" class="large material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="editar Contenido">editar</a>
            </td>
            <td>
            <a href="{{url('admin/details/'.$contenido->id.'/addDetail')}}" id="detalle_" class="large material-icons tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar Detalles">note_add</a>
           
            </td>
          </tr>
        @endforeach
        </tbody>

        </table>

      <div class="center">
    
      {!! $content->render() !!} 
       
      </div>

   

         </div>
     </div>


@endsection