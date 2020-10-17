@extends('layouts.app')

@section('content')
<div class="container">
Seccion para editar consultas
<form action="{{url('/consultas/'.$consulta->id)}} " method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}


@include('consultas.form',['Modo'=>'editar'])

</form>
</div>
@endsection