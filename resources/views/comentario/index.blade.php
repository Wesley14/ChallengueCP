
@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de folios</h1>
@stop

@section('content')
<a href="comentarios/create" class="btn btn-dark">Nuevo Folio</a>
&nbsp;
<br>
<br>
<table id="coments" class="table table-sm  table-striped table-bordered shadow-sm mt-4" style="width:100%">
  <thead class="bg-primary thead-dark text-white">
      <tr>
          <th scope="col">Folio</th>
          <th scope="col">Titulo</th>
          <th scope="col">Autor</th>
          <th scope="col">Responsable</th>
          <th scope="col">Descripción</th>
          <th scope="col">Fecha Resolución</th>
          <th scope="col">Estatus</th>
          <th scope="col">Acciones</th>
         
          <tbody>
          @foreach($auxiliar as $aux)
              <tr>
                  
                  <td>{{$aux->codigo}}</td>
                  <td>{{$aux->nombre}}</td>
                  <td>{{$aux->comentario}}</td>


                  <td>
                      <form action="{{route ('comentarios.destroy', $aux->id)}}" method="POST">
                        <a href="/folios/{{$aux->id}}/edit" class="btn btn-info">Editar</a>
                        <a href="/comentarios/{{$aux->id}}/create" class="btn btn-info">Comentar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Borrar</button>
                    </form>

                  </td>
              </tr>
              @endforeach
          </tbody>
          </tbody>

      </tr>
  </thead>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#coments').DataTable({
        "darkMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop