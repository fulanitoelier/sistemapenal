@extends('layouts.app')

@section('content')
<div class="container">
Seccion para editar leyes
<form action="{{url('/leyes/'.$ley->id)}} " method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}


@include('leyes.form',['Modo'=>'editar'])

</form>
</div>
@endsection