
@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de Usuarios</h1>
@stop
@section('content')
<a href="usuarios/create" class="btn btn-dark">Nuevo</a>
&nbsp;
<br>
<br>
<table id="usuarios" class="table table-sm  table-striped table-bordered shadow-sm mt-4" style="width:100%">
  <thead class="thead-dark">
      <tr>
          
          <th scope="col">Nombre</th>
          <th scope="col">Correo</th>
          <th scope="col">Tipo Usuario</th>
          <th scope="col">Acciones</th>
          <tbody>
              @foreach($usuarios as $usuario)
              <tr>
                  
                  <td>{{$usuario->name}} {{$usuario->lastname}}</td>
                  <td>{{$usuario->email}}</td>
                  @if($usuario->typeuser == 1)
                  <td>Administrador</td>
                  @else
                  <td>Usuario</td>
                  @endif
                  
                  <td>
                      <form action="{{route ('usuarios.destroy', $usuario->id)}}" method="POST">
                       
                        <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>
                        
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Borrar</button>
                    </form>

                  </td>
              </tr>
              @endforeach
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
    $('#usuarios').DataTable({
        "darkMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop