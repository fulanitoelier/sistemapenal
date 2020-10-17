@extends('layouts.app')

@section('content')
<div class="container">
Seccion para editar tipos
<form action="{{url('/tipos/'.$tipo->id)}} " method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}


@include('tipos.form',['Modo'=>'editar'])

</form>
</div>
@endsection