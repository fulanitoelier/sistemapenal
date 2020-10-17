@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje')){{
	Session::get('Mensaje')
}}
@endif

<a href="{{url('titulos/create')}}"class="btn btn-primary">Agregar</a>

<table class="table table-dark table-hover ">

	<thead class="thead-light">
		<tr>
			<th>Titulo</th>
			<th>Descripcion</th>
		<tr>

	</thead>

	<tbody>
		@foreach ($titulos as $titulo)
		<tr>
			<td>{{$titulo->titulo}}</td>
			<td>{{$titulo->nombre}}</td>
			
				
				
		<tr>
		@endforeach
	</tbody>
</table>   
</div>

@endsection