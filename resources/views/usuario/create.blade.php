@extends('adminlte::page')

@section('title', 'Challenge')

@section('content_header')
    <h1>Nuevo Usuario</h1>
@stop
@section('content')
<form action="/users" method="POST">
@csrf
<div class="mb-3">
  <label for="" class="form-label">Nombre:</label>
  <input id="nombre" name="nombre" type="text" class="form-control" tabindex=1 placeholder="Nombre...">
</div>
<div class="mb-3">
  <label for="" class="form-label">Apellido:</label>
  <input id="apellido" name="apellido" type="text" class="form-control" tabindex=2 placeholder="Apellido...">
</div>
<div class="mb-3">
  <label for="" class="form-label">Correo:</label>
  <input id="correo" name="correo" type="text"  class="form-control" tabindex=3 placeholder="Correo...">
</div>
<div class="mb-3">
  <label for="" class="form-label">Contraseña:</label>
  <input id="contraseña" name="contraseña" type="password"  class="form-control" tabindex=3 placeholder="Pasword...">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha de Nacimiento:</label>
  <input id="fecha_nacimiento" name="fecha_nacimiento" type="date"  class="form-control" tabindex=4 placeholder="">
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Tipo Usuario:</label>
    <select class="form-control"  id="tipousuario" name="tipousuario">
      <option value="0">Usuario</option>
      <option value="1">Administrador</option>
    </select>
</div>



<a href="/users" class="btn btn-secondary" tabindex=5>Cancelar</a>
<button type="submit" class="btn btn-primary" tanindex="4" >Guardar</button>

</form>
@endsection