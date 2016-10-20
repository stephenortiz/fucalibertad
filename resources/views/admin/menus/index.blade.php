@extends('layoutadmin')
@section('content')
<main>
     <div class="container">
       <br>
 	     <div class="row">

          <a href="{{ url ('admin/menus/create') }}" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
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
        @foreach ($menus as $menu)
          <tr>
            <td>{{$menu->descripcion}}</td>
            <td>{{$menu->url}}</td>
            <td>
            <a href="{{url('admin/menus/'.$menu->id.'/edit')}}" class="large material-icons">editar</a>
            </td>
          </tr>
        @endforeach
        </tbody>

        </table>

 	    </div>
 	 </div>
 </main>
@endsection