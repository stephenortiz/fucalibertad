@extends('layoutadmin')
@section('content')
     <div class="container">
       <br>
 	     <div class="row">
 	     <div class="row">

 	           <h3>Detalle De Contenidos</h3>

               <a href="{{ url ('admin/details/create') }}" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
               <br>

               <table class="bordered responsive-table">
                   <thead>

                   <th data-field="id">Id</th>
                   <th data-field="name">Titulo</th>
                   <th data-field="name">Descripción</th>
                   <th data-field="name">Imagen</th>
                   <th data-field="name">Menu</th>
                   <th></th>

                   </thead>

                   <tbody>
                   @foreach ($details as $detail)
                   <tr>
                   <td>{{$detail->id}}</td>
                   <td>{{$detail->titulo}}</td>
                   <td>{{$detail->descripcion}}</td>
                   <td>{{$detail->descripcion}}</td>
                   <td>
                   	@if(!empty($detail->imagen))
                      <img class="circle responsive-img" src="{{ asset('storage/'.$detail->imagen)}}" width="70">
                    @endif
                   </td>
                   <td>
                   	<a href="{{url('admin/details/'.$detail->id.'/edit')}}" class="large material-icons">editar</a>
                   </td>
                   </tr>
                   @endforeach
                   </tbody>

                   </table>

                    <div class="center">
    
                   {!! $details->render() !!} 
       
                    </div>

 	     </div>

 	 </div>

@endsection