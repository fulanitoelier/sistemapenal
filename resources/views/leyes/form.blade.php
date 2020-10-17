

    <div class="form-group">
<label for="codigo" class="control-label"> {{'articulo'}}</label>
    <input type="text" class="form-control" name="codigo" id="codigo" value="{{isset($ley->codigo)?$ley->codigo:''}}">
    </div>


    <div class="form-group">
<label for="descripcion"  class="control-label"> {{'Descripcion'}}</label>
<p><textarea name="descripcion" cols="100" rows="5" id="descripcion" value="{{isset($ley->descripcion)?$ley->descripcion:''}}"></textarea></p>
    </div>

    <div class="form-group">
<label for="min" class="control-label"> {{'Minima'}}</label>
    <input type="text" class="form-control" name="min" id="min" value="{{isset($ley->min)?$ley->min:''}}">
    </div>
    
    <div class="form-group">
<label for="max" class="control-label"> {{'Maxima'}}</label>
    <input type="text" class="form-control" name="max" id="max" value="{{isset($ley->max)?$ley->max:''}}">
    </div>
    

    
   

    <div class="form-group row">
    <label for="">Tipo_id</label>
        <select name="tipo_id"  id="tipo_id" class="form-control">
        <option>Seleccione el capitulo</option>
        @foreach ($tipos as $tipo)
            <option value="{{$tipo['id']}}">{{$tipo['descripcion']}}</option>
            @endforeach
        </select>
    </div>

    <input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

    <a class="btn btn-primary" href="{{url('leyes')}}">Regresar</a>

    
<style type="text/css">
        body{
           background-image: url(storage/uploads/fondo.jpg);
        }
        
    </style> 