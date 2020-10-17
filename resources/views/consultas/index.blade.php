@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje')){{
	Session::get('Mensaje')
}}
@endif

<a href="{{url('consultas/create')}}"class="btn btn-success">Agregar consultas</a>

<table class="table table-dark table-hover table-bordered">

	<thead class="thead-light">
		<tr>
			<th>#</th>
			
			<th>Descripcion</th>
			<th>Articulo</th>
			<th>Total de años</th>
			
		<tr>

	</thead>

	<tbody>
		@foreach ($consultas as $consulta)
		<tr>
			<td>{{$consulta->id}}</td>
			<td>{{$consulta->descripcion}}</td>
			<td>{{$consulta->leyes->codigo}}</td>
			
				<td>{{$consulta->total}}</td>
			
			
				
		<tr>
		@endforeach
	</tbody>
</table>   
</div>

@endsection