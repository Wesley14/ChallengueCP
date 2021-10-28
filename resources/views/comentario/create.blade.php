@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Nuevo Comentario</h1>
@stop
@section('content')
<form action="/comentarios" method="POST">
@csrf
  <div class="mb-3">
    <input id="codigo" name="codigo" type="text" class="form-control"  value="{{$folio->codigo}}" tabindex=1 disabled>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Autor:</label>
    <select class="form-control"  id="autor" name="autor">
      <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentario:</label>
    <textarea class="form-control"  id="comentario" name="comentario" rows="3" ></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Responsable:</label>
    <select class="form-control" id="exampleFormControlSelect1" id="responsable" name="responsable">
    @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}">{{$usuario->nombre}} {{$usuario->apellido}}</option>
      @endforeach
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control"  id="descripcion" name="descripcion" rows="3"></textarea>
  </div>
  <div class="mb-3">
     <label for="" class="form-label">Fecha de resolución:</label>
     <input id="fecha_resolucion" name="fecha_resolucion" type="date"  class="form-control" tabindex=4 placeholder="">
</div>

<br>
 <a href="/comentarios" class="btn btn-secondary" tabindex=5>Cancelar</a>
 <button type="submit" class="btn btn-primary" tanindex="4" >Guardar</button>

</form>
@endsection