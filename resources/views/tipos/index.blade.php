@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('Mensaje')){{
	Session::get('Mensaje')
}}
@endif

<a href="{{url('tipos/create')}}"class="btn btn-primary">Agregar</a>

<table class="table table-dark table-hover ">

	<thead class="thead-light">
		<tr>
			<th>Titulo</th>
			<th>Capitulo</th>
			<th>Descripcion</th>
			<th>Acciones</th>
		<tr>

	</thead>

	<tbody>
		@foreach ($tipos as $tipo)
		<tr>
			<td>{{$tipo->titulos->titulo}}</td>
			<td>{{$tipo->capitulo}}</td>
			<td>{{$tipo->descripcion}}</td>
			
					<td>
		
			<a class="btn btn-warning" href="{{url('/tipos/'.$tipo->id.'/edit')}}"> Editar</a>

			

			</td>
				
		<tr>
		@endforeach
	</tbody>
</table>   
</div>

@endsection