@extends('layoutadmin')
@section('content')
     <div class="container">
       <br>
 	     <div class="row">

          <a href="{{ url ('admin/repertorys/create') }}" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
          <br>

        <table class="bordered responsive-table">
        <thead>
          <tr>
              <th data-field="id">descripcion</th>
              <th data-field="name">url</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
        @foreach ($repertorys as $menu)
          <tr>
            <td>{{$menu->descripcion}}</td>
            <td>{{$menu->url}}</td>
            
          </tr>
        @endforeach
        </tbody>

        </table>

 	    </div>
 	 </div>
@endsection