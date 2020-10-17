@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('Mensaje')){{
	Session::get('Mensaje')
}}
@endif


  <form class="form-inline">
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>


  <h6>
	@if($search){	  
  <div class="alert alert-success" role="alert">
		Los resultados de su busqueda son:
</div>
@endif
<h6>


<table class="table  table-hover table-dark ">
<a href="{{url('leyes/create')}}"class="btn btn-outline-success my-2 my-sm-0">Agregar leyes</a>
	<thead class="thead-light">
		<tr>
			<th>Titulo</th>
			<th>  Capitulo</th>
			<th>Descripcion</th>
			<th>Min</th>
			<th>Max</th>
			
		<tr>

	</thead>

	<tbody>
	
		@foreach ($leyes as $ley)
		<tr>
			
			<td>{{$ley->tipos->titulos->titulo}}</td>
			<td>{{          $ley->tipos->descripcion                 }}</td>
			<td>{{$ley->descripcion}}</td>
			<td>{{$ley->min}}</td>
			<td>{{$ley->max}}</td>
			
			
				
		<tr>
			
		
		@endforeach
		
	</tbody>
</table>   



</div>



@endsection