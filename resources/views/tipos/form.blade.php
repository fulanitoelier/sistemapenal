


   
    <div class="form-group row">
    <label for="">titulo_id</label>
        <select name="titulo_id"  id="titulo_id" class="form-control">
        <option>Seleccione el titulo de ley</option>
        @foreach ($titulos as $titulo)
            <option value="{{$titulo['id']}}">{{$titulo['nombre']}}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
<label for="capitulo" class="control-label"> {{'Capitulo'}}</label>
    <input type="text" class="form-control" name="capitulo" id="capitulo" value="{{isset($tipo->capitulo)?$tipo->capitulo:''}}">
    </div>

    <div class="form-group">
<label for="descripcion" class="control-label"> {{'Descripcion'}}</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{isset($tipo->descripcion)?$tipo->descripcion:''}}">
    </div>

    


    <input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

    <a class="btn btn-primary" href="{{url('tipos')}}">Regresar</a>