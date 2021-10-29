@extends('adminlte::page')

@section('title', 'Challenge')

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
<br>
 <a href="/comentarios" class="btn btn-secondary" tabindex=5>Cancelar</a>
 <button type="submit" class="btn btn-primary" tanindex="4" >Guardar</button>

</form>
@endsection