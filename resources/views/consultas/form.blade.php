<div class="form-group">
<label for="descripcion" class="control-label"> {{'descripcion'}}</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{isset($consulta->descripcion)?$consulta->descripcion:''}}">
    </div>



    <div class="form-group row">
    <label for="tipo_id">Tipo_id</label>
        <select name="tipo_id" id="tipo_id" class="form-control ">
        @foreach ($tipos as $tipo)
            <option value=" {{$tipo['id']}} " > {{$tipo['descripcion']}}      </option>
            @endforeach
        </select>
    </div>



    <div class="form-group row">
        <label for="ley_id">Ley_id</label>
        <select name="ley_id"  id="ley_id" class="form-control">    
        
        @foreach ($leyes as $ley)
            <option value="{{$ley['id']}}">{{$ley['codigo']}}</option>
            @endforeach
                 </select>       
    </div>

    <div class="form-group">
    <label for="atentuante">Atentuante</label>
    <input name="atentuante" type="checkbox" value="1">
    </div>

    <div class="form-group">
    <label for="agravante">Agravante</label>
    <input name="agravante" type="checkbox" value="1">
    </div>

    <input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

    <a class="btn btn-primary" href="{{url('consultas')}}">Regresar</a>