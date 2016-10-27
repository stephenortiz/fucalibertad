@extends('layoutadmin')
@section('content')

<div class="container">
 <br>
 	 <div class="row">
      <a href="{{ url ('admin/employees/create') }}" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
      <br>
      <table>
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Apellido</th>
              <th data-field="price">Logo</th>
              <th data-field="name">Cargo</th>
              <th data-field="price">Estado</th>
              <th data-field="price">Menú</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
        @foreach ($employees as $employee)
          <tr>
            <td>{{$employee->nombre}}</td>
            <td>{{$employee->apellido}}</td>
            <td>
            @if(!empty($employee->logo))
            <img class="circle responsive-img" src="{{ asset('storage/'.$employee->logo)}}" width="70">
            @endif
            </td>
            <td>{{$employee->cargo}}</td>
            <td>{{$employee->states_id->descripcion}}</td>
            <td>{{$employee->repertorys_id->descripcion}}</td>
            <td>
            <a href="{{url('admin/employees/'.$employee->id.'/edit')}}" class="large material-icons">mode_edit</a>
            </td>
          </tr>
        @endforeach
        </tbody>

      </table>

       

      <div class="center">
    
      {!! $employees->render() !!} 
       
      </div>
      

   </div> 
 </div>
 </div>

@endsection