@extends('layouts.app')

@section('content')
<div class="container">
Seccion para editar titulos
<form action="{{url('/titulos/'.$titulo->id)}} " method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}


@include('titulos.form',['Modo'=>'editar'])

</form>
</div>
@endsection