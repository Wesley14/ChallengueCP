
@extends('adminlte::page')

@section('title', 'Challenge')

@section('content_header')
    <h1>Comentarios</h1>
@stop

@section('content')

<br>
<br>

<div class="accordion" id="accordionFlushExample">
@foreach($auxiliares as $auxiliar)
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading{{$auxiliar->id}}">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Folio: {{$auxiliar->codigo}} Autor: {{$auxiliar->nombre}}
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>{{$auxiliar->comentario}}</strong> 
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $('#coments').DataTable({
        "darkMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop