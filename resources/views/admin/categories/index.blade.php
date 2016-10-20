@extends('layoutadmin')
@section('content')
<main>
        <div class="container">
          <div class="row">
             <div class="col s12 m9 l10">
                 <div id="input" class="section scrollspy">
                      <div class="row">
                       <h4>Categorias</h4>
                        <a href="{{ url ('admin/categories/create') }}" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>

                  <table class="bordered responsive-table">
                         <thead>
                      <tr>
                         <th data-field="name">Descripción</th>
                         <th></th>
                     </tr>
                        </thead>

                     <tbody>
                        @foreach ($category as $category)
                        <tr>
                           <td>{{$category->descripcion}}</td>
                           <td>
                           <a href="{{url('admin/categories/'.$category->id.'/edit')}}" class="large material-icons">editar</a>
                          </td>
                        </tr>
                       @endforeach
                     </tbody>
                  </table>
                      </div>
                 </div>
              </div>
          </div>
        </div>
</main>
@endsection